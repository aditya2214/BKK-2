<?php

namespace App\Imports;

use App\absenSortir;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class absenSortir2 implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new absenSortir([
            'id' => $row['id'],
            'id_peserta' => $row['id'],
            'status_tes' => $row['status'],
            'kategori_tes' => $row['kategori_tes'],
            
        ]);
    }
}
