<?php

namespace App\Exports;

use App\Models\AbsensiMurid;
use App\Models\Kelas;
use App\Models\Pertemuan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class AbsensiRekapExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithTitle
{
    public int $totalPertemuan = 0;

    public function __construct(
        private Kelas $kelas,
        private int $bulan,
        private int $tahun,
    ) {}

    public function title(): string
    {
        return 'Rekap Absensi';
    }

    public function headings(): array
    {
        return ['No', 'Nama Murid', 'Hadir', 'Terlambat', 'Izin', 'Sakit', 'Alpha', 'Total Pertemuan', 'Kehadiran (%)'];
    }

    public function collection(): Collection
    {
        $pertemuanIds = Pertemuan::selesai()
            ->where('kelas_id', $this->kelas->id)
            ->whereMonth('tanggal', $this->bulan)
            ->whereYear('tanggal', $this->tahun)
            ->pluck('id');

        $this->totalPertemuan = $pertemuanIds->count();
        $totalPertemuan = $this->totalPertemuan;

        $rekap = AbsensiMurid::whereIn('pertemuan_id', $pertemuanIds)
            ->with('murid')
            ->get()
            ->groupBy('murid_id')
            ->map(function ($items) use ($totalPertemuan) {
                $murid  = $items->first()->murid;
                $counts = $items->countBy('status');
                $hadir  = ($counts['hadir'] ?? 0) + ($counts['terlambat'] ?? 0);

                return [
                    'nama'            => $murid->nama,
                    'hadir'           => $counts['hadir'] ?? 0,
                    'terlambat'       => $counts['terlambat'] ?? 0,
                    'izin'            => $counts['izin'] ?? 0,
                    'sakit'           => $counts['sakit'] ?? 0,
                    'alpha'           => $counts['alpha'] ?? 0,
                    'total_pertemuan' => $totalPertemuan,
                    'persentase'      => $totalPertemuan > 0
                        ? round(($hadir / $totalPertemuan) * 100, 1)
                        : 0,
                ];
            })
            ->sortByDesc('hadir')
            ->values();

        return $rekap->map(function ($item, $i) {
            return [
                $i + 1,
                $item['nama'],
                $item['hadir'],
                $item['terlambat'],
                $item['izin'],
                $item['sakit'],
                $item['alpha'],
                $item['total_pertemuan'],
                $item['persentase'] . '%',
            ];
        });
    }

    public function styles(Worksheet $sheet): array
    {
        $lastRow = $sheet->getHighestRow();

        $sheet->getStyle("C1:I{$lastRow}")
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER);

        return [
            1 => [
                'font'      => ['bold' => true],
                'fill'      => ['fillType' => 'solid', 'startColor' => ['rgb' => 'E2E8F0']],
                'alignment' => ['horizontal' => 'center'],
            ],
        ];
    }
}
