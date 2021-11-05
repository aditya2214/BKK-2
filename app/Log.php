<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
   protected $fillable = ['id_user','aksi'];

   public function user_r(){
      return $this->belongsTo(\App\User::class,'id_user','id');
  }
  
}
