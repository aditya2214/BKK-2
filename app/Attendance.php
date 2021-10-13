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
}
