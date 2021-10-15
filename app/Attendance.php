<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'id_vacancy',
        'full_name',
        'gender',
        'active_email',
        'nik',
        'kabupaten',
        'address',
        'place',
        'date_and_place',
        'age',
        'height',
        'weight',
        'school',
        'graduation_year',
        'experience',
        'no_handphone'
    ];

    public function Seleksi_r(){
        return $this->hasMany(\App\absenSortir::class,'id_peserta','id');
    }

    public function vacancy_r(){
        return $this->belongsTo(\App\Vacancy::class,'id_vacancy','id');
    }
}
