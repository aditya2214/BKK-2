<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absenSortir extends Model
{
    protected $fillable = [
        'id_peserta',
        'kategori_tes',
        'status_tes',
        'notes2'
    ];

    public function Seleksi_r(){
        return $this->hasOne(\App\Attendance::class,'id','id_peserta');
    }
}
