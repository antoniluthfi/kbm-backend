<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PengajarTemplatePanduanSheet implements FromArray, WithStyles, ShouldAutoSize, WithTitle
{
    public function array(): array
    {
        return [
            ['Kolom', 'Wajib?', 'Keterangan', 'Contoh'],
            ['nama', 'Ya', 'Nama lengkap pengajar', 'Ustadz Abdullah'],
            ['email', 'Tidak', 'Email untuk login. Jika diisi, akun user akan dibuat otomatis.', 'ustadz@email.com'],
            ['phone', 'Tidak', 'Nomor HP pengajar', '081234567890'],
            ['jenis_kelamin', 'Ya', 'L = Laki-laki, P = Perempuan', 'L'],
            ['tanggal_lahir', 'Tidak', 'Format: YYYY-MM-DD', '1990-06-15'],
            ['pendidikan_terakhir', 'Tidak', 'Pendidikan terakhir', 'S1 Pendidikan Agama Islam'],
            ['tanggal_bergabung', 'Ya', 'Format: YYYY-MM-DD', '2023-01-01'],
            ['alamat', 'Tidak', 'Alamat lengkap', 'Jl. Melati No. 3, Jakarta'],
        ];
    }

    public function styles(Worksheet $sheet): array
    {
        return [
            1 => ['font' => ['bold' => true], 'fill' => [
                'fillType'   => Fill::FILL_SOLID,
                'startColor' => ['rgb' => 'CBD5E1'],
            ]],
        ];
    }

    public function title(): string
    {
        return 'Panduan';
    }
}
