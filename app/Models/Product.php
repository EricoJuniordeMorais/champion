<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','image','price'];

    public function user(){
      return $this->belongsToMany(User::class, 'user');
    }

}
