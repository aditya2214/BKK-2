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
            'id_vacancy' => $row['id_lowongan'],
            'full_name'  => $row['nama_lengkap'],
            'gender' => $row['jenis_kelamin'],
            'active_email' => $row['email'],
            'nik' => $row['nik'],
            'kabupaten' => $row['kabupaten'],
            'address' => $row['alamat'],
            'place' => $row['tempat'],
            'date_and_place' =>$row['ttl'],
            'age' => $row['umur'],
            'height' => $row['tinggi_badan'],
            'weight' => $row['berat_badan'],
            'school' => $row['asal_sekolah'],
            'graduation_year' => $row['tahun_lulus'],
            'experience' => $row['pengalaman'],
            'no_handphone' => $row['no_handphone']
        ]);

    }

    public function headingRow(): int
    {
        return 1;
    }
}
