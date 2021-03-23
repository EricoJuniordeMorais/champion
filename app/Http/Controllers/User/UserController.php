<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
Use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    //Functions to direct to a view

    static public function create(){
      session_start();
      $products = Product::all()->toArray();

      if(isset($_SESSION['error'])){
        $hasErrors = true;
        $errors = $_SESSION['errorMessages'];
      }else{
        $hasErrors = false;
        $errors = [];
      }
      session_unset();
      return view('create', compact('products', 'hasErrors', 'errors'));
    }

    static public function index(){
      $dealers = User::withTrashed()->where('is_admin', null)->orderByDesc('id')->paginate(15);
      return view('index', compact('dealers'));
    }

    //Functions to process data

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
          'name' => 'required',
          'email' => 'required|unique:users|email',
          'address' => 'required',
          'cookie' => 'required|unique:users',
          'address' => 'required',
          'banners' => ['required','min:1'],
          'phones' => ['required','min:1'],
          'ddds' => ['required','min:1'],
          'products' => 'sometimes',
        ]);
	
        if ($validator->fails()) {
            session_start();
            $_SESSION['error'] = true;
            $_SESSION['errorMessages'] = $validator->errors()->messages();
            return \Redirect::route('user.create');
        }
         
        $user = new User();
	$user->fill($request->except(['banner','product','phone']));
        $user->save();

        foreach ($request->phones as $index => $phone) {
          $user->phones()->create(['phone' => $phone, 'ddd' => $request->ddds[$index]]);
        }

        $user->products()->attach($request->products);

	foreach ($request->file('banners') as $key => $banner) {
		$fileName = $banner->getFileName() . '.' . $banner->getClientOriginalExtension();
		
		$path = Storage::putFileAs('customers/champion/banners', $banner,$fileName, ['ContentDisposition' => 'attachment']);
		Storage::disk('s3')->setVisibility($path, 'public');	

		if ($path){
			$user->banners()->create(['name' => $banner->getClientOriginalName(), 'image' => Storage::disk('s3')->url('customers/champion/banners/' . $fileName)]);
		}	
	}

        return \Redirect::route('user.index');
    }

    public function show($dealerSlug){
        try {
            $dealer = User::where('slug', $dealerSlug)->get()->toArray();
            $phones = User::find($dealer[0]['id'])->phones()->get()->toArray();
            $banners = User::find($dealer[0]['id'])->banners()->get()->toArray();
            $localProducts = User::find($dealer[0]['id'])->products()->get()->toArray();
            $onlineProducts = Product::all()->toArray();
            $localProductsIds = array();
            foreach ($localProducts as $key => $value) {
              $localProductsIds[] = $value['pivot']['product_id'];
            }
            return view('dealer', compact('dealer', 'banners', 'phones', 'localProducts', 'onlineProducts', 'localProductsIds'));
      } catch (\Exception $e) {
          abort(404);
      }
    }

    public function update(Request $request, int $userId){
      // TODO: Para o futuro
    }

    public function destroy($id){
        User::find($id)->delete();
        $dealers = User::withTrashed()->orderByDesc('id')->paginate(15);
        return \Redirect::route('user.index');
    }

    public function restore($id){
        User::onlyTrashed()->find($id)->restore();
        $dealers = User::withTrashed()->orderByDesc('id')->paginate(15);
        return \Redirect::route('user.index');
    }
}
