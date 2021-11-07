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
            'date_and_place' =>$this->ExcelToPHPObject($row['tgl']),
            'age' => $row['umur'],
            'height' => $row['tinggi_badan'],
            'weight' => $row['berat_badan'],
            'school' => $row['asal_sekolah'],
            'graduation_year' => $this->ExcelToPHPObject($row['tahun_lulus']),
            'experience' => $row['pengalaman'],
            'no_handphone' => $row['no_handphone']
        ]);

    }

    public static function ExcelToPHP($dateValue = 0)
    {
        $myExcelBaseDate = 25569;
        //    Adjust for the spurious 29-Feb-1900 (Day 60)
        if ($dateValue < 60) {
            --$myExcelBaseDate;
        }

        // Perform conversion
        if ($dateValue >= 1) {
            $utcDays = $dateValue - $myExcelBaseDate;
            $returnValue = round($utcDays * 86400);
            if (($returnValue <= PHP_INT_MAX) && ($returnValue >= -PHP_INT_MAX)) {
                $returnValue = (int) $returnValue;
            }
        } else {
            $hours = round($dateValue * 24);
            $mins = round($dateValue * 1440) - round($hours * 60);
            $secs = round($dateValue * 86400) - round($hours * 3600) - round($mins * 60);
            $returnValue = (int) gmmktime($hours, $mins, $secs);
        }

        // Return
        return $returnValue;
    }    //    function ExcelToPHP()

    public static function ExcelToPHPObject($dateValue = 0)
    {
        $dateTime = self::ExcelToPHP($dateValue);
        $days = floor($dateTime / 86400);
        $time = round((($dateTime / 86400) - $days) * 86400);
        $hours = round($time / 3600);
        $minutes = round($time / 60) - ($hours * 60);
        $seconds = round($time) - ($hours * 3600) - ($minutes * 60);

        $dateObj = date_create('1-Jan-1970+' . $days . ' days');
        $dateObj->setTime($hours, $minutes, $seconds);

        return $dateObj;
    }


    public function headingRow(): int
    {
        return 1;
    }
}
