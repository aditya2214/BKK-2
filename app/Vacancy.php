<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = ['kode_vacancy','title_vacancy','place_and_date','recruitment','notes'];
}
