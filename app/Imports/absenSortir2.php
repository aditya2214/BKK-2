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
            'id' => $row[1],
            'id_peserta' => $row[1],
            'status_tes' => $row[2],
            'kategori_tes' => $row[3],
            
        ]);
    }
}
