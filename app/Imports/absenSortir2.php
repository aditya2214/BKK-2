<?php

namespace App\Imports;

use App\absenSortir;
use Maatwebsite\Excel\Concerns\ToModel;

class absenSortir2 implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new absenSortir([
            'id_peserta' => $row[1],
            'kategori_tes' => $row[2],
            'status_tes' => $row[3],
            
        ]);
    }
}
