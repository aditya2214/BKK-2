<?php

namespace App\Imports;

use App\Attendance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PesertaImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Attendance([
            'id_vacancy' => $row['id'],
            'full_name'  => $row['id'],
            'gender' => $row['id'],
            'active_email' => $row['id'],
            'nik' => $row['id'],
            'kabupaten' => $row['id'],
            'address' => $row['id'],
            'place' => $row['id'],
            'date_and_place' =>$row['id'],
            'age' => $row['id'],
            'height' => $row['id'],
            'weight' => $row['id'],
            'school' => $row['id'],
            'graduation_year' => $row['id'],
            'experience' => $row['id'],
            'no_handphone' => $row['id']
        ]);

    }

    public function headingRow(): int
    {
        return 1;
    }
}
