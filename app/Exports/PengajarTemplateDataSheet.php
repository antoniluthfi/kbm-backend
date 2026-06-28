<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PengajarTemplateDataSheet implements FromArray, WithHeadings, WithStyles, ShouldAutoSize, WithTitle
{
    public function array(): array
    {
        return [
            ['Ustadz Abdullah', 'ustadz.abdullah@email.com', '081234567890', 'L', '1990-06-15', 'S1 Pendidikan Agama Islam', '2023-01-01', 'Jl. Melati No. 3, Jakarta'],
        ];
    }

    public function headings(): array
    {
        return ['nama*', 'email', 'phone', 'jenis_kelamin*', 'tanggal_lahir', 'pendidikan_terakhir', 'tanggal_bergabung*', 'alamat'];
    }

    public function styles(Worksheet $sheet): array
    {
        return [
            1 => ['font' => ['bold' => true], 'fill' => [
                'fillType'   => Fill::FILL_SOLID,
                'startColor' => ['rgb' => 'CBD5E1'],
            ]],
            2 => ['font' => ['color' => ['rgb' => '94A3B8'], 'italic' => true]],
        ];
    }

    public function title(): string
    {
        return 'Data Pengajar';
    }
}
