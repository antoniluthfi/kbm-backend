<?php

namespace App\Exports;

use App\Models\Kelas;
use App\Models\MuridKelas;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class KelasRosterExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithTitle
{
    public function __construct(private Kelas $kelas) {}

    public function title(): string
    {
        return 'Roster Kelas';
    }

    public function headings(): array
    {
        return ['No', 'Nama', 'Jenis Kelamin', 'Tanggal Lahir', 'Tanggal Masuk', 'Status'];
    }

    public function collection(): Collection
    {
        $muridKelas = MuridKelas::with('murid')
            ->where('kelas_id', $this->kelas->id)
            ->aktif()
            ->get()
            ->sortBy('murid.nama')
            ->values();

        return $muridKelas->map(function ($mk, $i) {
            $murid = $mk->murid;

            return [
                $i + 1,
                $murid->nama,
                $murid->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan',
                $murid->tanggal_lahir ? \Carbon\Carbon::parse($murid->tanggal_lahir)->format('d/m/Y') : '-',
                $mk->tanggal_masuk ? $mk->tanggal_masuk->format('d/m/Y') : '-',
                ucfirst($mk->status),
            ];
        });
    }

    public function styles(Worksheet $sheet): array
    {
        return [
            1 => [
                'font'      => ['bold' => true],
                'fill'      => ['fillType' => 'solid', 'startColor' => ['rgb' => 'E2E8F0']],
                'alignment' => ['horizontal' => 'center'],
            ],
        ];
    }
}
