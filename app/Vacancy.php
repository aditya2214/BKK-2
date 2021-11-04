<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = ['kode_vacancy','title_vacancy','place_and_date','recruitment','notes','switch'];

    public function attendance_r(){
        return $this->hasMany(\App\Attendance::class,'id_vacancy','id');
    }

    public function g_form_link(){
        return $this->hasOne(\App\LinkGform::class,'id_loker','id');
    }
}
