<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Jamayat;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class JamayatImport implements ToModel
{

       public function model(array $row)
    {
        
        return new Jamayat([
                
                'baladia' => $row[1],
                'tasmia' => $row[2],
                'rakm-itimad' => $row[3],
                'tarikh-tassiss'  =>!empty($row[4])? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]):NULL,
                'tarikh-motabaka' =>!empty($row[5])? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]):NULL,
                'rakm-itimad1' => $row[6],
                'tarikh-tajdid1' =>!empty($row[7])? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]):NULL,
                'tabaa' => $row[8],
                'kitaa' => $row[9],
                'prenom-president1' => $row[10],
                'nom-president1' => $row[11],
                'adresse' => $row[12],
                'phone' => $row[13],
                'nachta' => $row[14],
                'remarque' => $row[15],
                'email' => $row[16],
                'rakm-itimad2' => $row[17],
                'rakm-itimad3' => $row[18],
                'rakm-itimad4' => $row[19],
                'rakm-itimad5' => $row[20],
                'rakm-itimad6' => $row[21],
                'tarikh-tajdid2' => !empty($row[22])?\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[22]):NULL,
                'tarikh-tajdid3' => !empty($row[23])?\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[23]):NULL,
                'tarikh-tajdid4' => !empty($row[24])?\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[24]):NULL,
                'tarikh-tajdid5' => !empty($row[25])?\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[25]):NULL,
                'tarikh-tajdid6' => !empty($row[26])?\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[26]):NULL,
                'halat-elmilef' => $row[27],
                'nom-president2' => $row[28],
                'nom-president3' => $row[29],
                'nom-president4' => $row[30],
                'nom-president5' => $row[31],
                'nom-president6' => $row[32],
                'nom-president7' => $row[33],
                'prenom-president2' => $row[34],
                'prenom-president3' => $row[35],
                'prenom-president4' => $row[36],
                'prenom-president5' => $row[37],
                'prenom-president6' => $row[38],
                'prenom-president7' => $row[39],
                'description' => $row[40],
                'user_id' => $row[41],
                'slug' => $row[42],
                'akherTarikhTajdid' => !empty($row[43])?\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[43]):NULL
                
                
            ]);
        }
    }

