<?php

namespace App\Exports;

use App\Models\Jamayat;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;




class JamayatsExport implements FromCollection, WithHeadings


{   

    public function headings(): array
    {
        return [
                'الرقم',
                'البلدية',
                'التسمية',
                'رقم الإعتماد',
                'تاريخ التأسيس',
                'تاريخ المطايقة',
                '1رقم الإعتماد' ,
                '1تاريخ التجديد',
                'الطابع',
                'القطاع',
                '1إسم الرئيس',
                '1لقب الرئيس',
                'العنوان',
                'الهاتف',
                'الوضعية',
                'ملاحظة',
                'الإيميل',
                'رقم الإعتماد2',
                'رق الإعتماد3',
                'رقم الإعتماد4',
                'رقم الإعتماد5',
                'رقم الإعتماد6',
                'تاريخ التجديد2',
                'تاريخ التجديد3',
                'تاريخ التجديد4',
                'تاريخ التجديد5',
                'تاريخ التجديد6',
                'حالة الملف' ,
                '2لقب الرئيس',
                '3لقب الرئيس',
                'لقب الرئيس4',
                'لقب الرئيس5',
                'لقب الرئيس6',
                'لقب الرئيس7',
                '2إسم الرئيس',
                'إسم الرئيس3',
                'إسم الرئيس4',
                'إسم الرئيس5',
                'إسم الرئيس6',
                'إسم الرئيس7',
                'الوصف',
                'الموظف',
                'slug',
                'آخر تاريخ تجديد',
                
        ];
    }
    
     public function collection()
        {
            return Jamayat::all();
        }
    
    }






