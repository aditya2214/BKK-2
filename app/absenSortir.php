<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absenSortir extends Model
{
    protected $fillable = [
        'id_peserta',
        'kategori_tes',
        'status_tes',
    ];

    public function Seleksi_r(){
        return $this->belongsTo(\App\absenSortir::class,'id_peserta','id');
    }
}
