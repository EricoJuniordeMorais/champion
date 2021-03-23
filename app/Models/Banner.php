<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Banner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }

}
