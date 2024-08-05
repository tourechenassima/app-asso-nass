<?php
namespace App\Exports;

use App\Models\Jamayat;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;
use Illuminate\Support\Facades\DB;

class JamayatsExportQuery implements FromQuery, WithHeadings, ShouldAutoSize, WithEvents, WithStyles
{
    use Exportable;

    protected $selectedJamayats;
    protected $selectedfields;
    protected $title;

    public function __construct($selectedJamayats, $selectedfields, $title)
    {
        $this->selectedfields = $selectedfields;
        $this->selectedJamayats = $selectedJamayats;
        $this->title = $title;
    }

    public function query()
    {
        $fields = array_map(function($field) {
            return DB::raw("`$field`");
        }, $this->selectedfields);

        return Jamayat::select($fields)
                      ->whereIn('id', $this->selectedJamayats)
                      ->orderBy('baladia'); // ترتيب النتائج بناءً على "baladia"
    }

    public function headings(): array
    {
        $headings = [];
        foreach ($this->selectedfields as $column) {
            $headings[] = $this->getCustomHeading($column);
        }
        return $headings;
    }

    private function getCustomHeading($column)
    {
        $customHeadings = [
            'id' => 'الرقم',
            'baladia' => 'البلدية',
            'tasmia' => 'التسمية',
            'rakm-itimad' => 'رقم الإعتماد',
            'tarikh-tassiss' => 'تاريخ التأسيس',
            'tarikh-motabaka' => 'تاريخ المطايقة',
            'rakm-itimad1' => '1رقم الإعتماد',
            'tarikh-tajdid1' => '1تاريخ التجديد',
            'tabaa' => 'الطابع',
            'kitaa' => 'القطاع',
            'prenom-president1' => '1إسم الرئيس',
            'nom-president1' => '1لقب الرئيس',
            'adresse' => 'العنوان',
            'phone' => 'الهاتف',
            'nachta' => 'الوضعية',
            'remarque' => 'ملاحظة',
            'email' => 'الإيميل',
            'rakm-itimad2' => 'رقم الإعتماد2',
            'rakm-itimad3' => 'رق الإعتماد3',
            'rakm-itimad4' => 'رقم الإعتماد4',
            'rakm-itimad5' => 'رقم الإعتماد5',
            'rakm-itimad6' => 'رقم الإعتماد6',
            'tarikh-tajdid2' => 'تاريخ التجديد2',
            'tarikh-tajdid3' => 'تاريخ التجديد3',
            'tarikh-tajdid4' => 'تاريخ التجديد4',
            'tarikh-tajdid5' => 'تاريخ التجديد5',
            'tarikh-tajdid6' => 'تاريخ التجديد6',
            'halat-elmilef' => 'حالة الملف',
            'nom-president2' => '2لقب الرئيس',
            'nom-president3' => '3لقب الرئيس',
            'nom-president4' => 'لقب الرئيس4',
            'nom-president5' => 'لقب الرئيس5',
            'nom-president6' => 'لقب الرئيس6',
            'nom-president7' => 'لقب الرئيس7',
            'prenom-president2' => '2إسم الرئيس',
            'prenom-president3' => 'إسم الرئيس3',
            'prenom-president4' => 'إسم الرئيس4',
            'prenom-president5' => 'إسم الرئيس5',
            'prenom-president6' => 'إسم الرئيس6',
            'prenom-president7' => 'إسم الرئيس7',
            'description' => 'الوصف',
            'user_id' => 'الموظف',
            'slug' => 'slug',
            'akherTarikhTajdid' => 'آخر تاريخ تجديد',
            'created_at' => 'نشأ بتاريخ',
            'updated_at' => 'استحدث بتاريخ',
        ];

        return $customHeadings[$column] ?? $column;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setRightToLeft(true);
                $event->sheet->insertNewRowBefore(1, 5);
                $event->sheet->setCellValue('A1', 'الجمهورية الجزائرية الديمقراطية الشعبية');
                $event->sheet->setCellValue('A2', 'ولاية: باتنة');
                $event->sheet->setCellValue('A3', 'دائرة: ثنية العابد');
                $event->sheet->setCellValue('A4', $this->title);

                $highestColumn = $event->sheet->getHighestColumn();
                
                $event->sheet->mergeCells('A1:' . $highestColumn . '1');
                $event->sheet->getStyle('A1')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 18, 'color' => ['rgb' => '000000']],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                    ]
                ]);
                $event->sheet->mergeCells('A4:' . $highestColumn . '4');
                $event->sheet->getStyle('A4')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 16, 'color' => ['rgb' => '000000']],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                    ]
                ]);
                $event->sheet->getStyle('A2')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 14, 'color' => ['rgb' => '000000']],
                    // 'alignment' => [
                    //     'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    //     'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                    // ]
                ]);
                $event->sheet->getStyle('A3')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 14, 'color' => ['rgb' => '000000']],
                    // 'alignment' => [
                    //     'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    //     'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                    // ]
                ]);

                // تمكين التفاف النص في الصف السادس
                $sheet = $event->sheet->getDelegate();
                $data = $sheet->toArray();
                $startRow = 6; // بداية البيانات الفعلية
                $sheet->getStyle('A6:' . $sheet->getHighestColumn() . '6')->getAlignment()->setWrapText(true);

                // دمج الخلايا التي تحتوي على نفس القيمة في عمود "baladia"
                $columnIndex = array_search('baladia', array_keys($this->selectedfields)) + 1;

                $currentValue = null;
                $startMerge = $startRow;

                for ($row = $startRow; $row <= count($data) + 5; $row++) {
                    $cellValue = $sheet->getCellByColumnAndRow($columnIndex, $row)->getValue();
                    if ($cellValue !== $currentValue) {
                        if ($currentValue !== null) {
                            $endMerge = $row - 1;
                            if ($endMerge > $startMerge) {
                                $sheet->mergeCellsByColumnAndRow($columnIndex, $startMerge, $columnIndex, $endMerge);
                                $sheet->getStyleByColumnAndRow($columnIndex, $startMerge)->applyFromArray([
                                    'alignment' => [
                                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                                    ]
                                ]);
                            }
                        }
                        $currentValue = $cellValue;
                        $startMerge = $row;
                    }
                }
               

                // دمج الخلايا الأخيرة
                if ($currentValue !== null && $row > $startMerge) {
                    $sheet->mergeCellsByColumnAndRow($columnIndex, $startMerge, $columnIndex, $row - 1);
                    $sheet->getStyleByColumnAndRow($columnIndex, $startMerge)->applyFromArray([
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                        ]
                    ]);
                }
            },
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true, 'size' => 14, 'color' => ['rgb' => 'FFFFFF']],
                'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                          'color' => ['rgb' => '808080']]
            ],
        ];
    }
}
