<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Phone extends Model
{
    use SoftDeletes;

    protected $fillable = [
          'ddd',
          'phone'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }

}
