<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkGform extends Model
{
    protected $fillable = ['id_loker','link_gfom'];

    public function vacancy_rr(){
        return $this->hasOne(\App\Vacancy::class,'id','id_loker');
    }
}
