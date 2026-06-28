<?php

namespace App\Exports;

use App\Models\KasTransaksi;
use App\Models\Kelas;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class KasTransaksiExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithTitle
{
    private Kelas $kelas;
    private array $filters;

    public function __construct(Kelas $kelas, array $filters = [])
    {
        $this->kelas   = $kelas;
        $this->filters = $filters;
    }

    public function title(): string
    {
        return 'Transaksi Kas';
    }

    public function headings(): array
    {
        return ['No', 'Tanggal', 'Keterangan', 'Kategori', 'Jenis', 'Jumlah (Rp)'];
    }

    public function collection(): Collection
    {
        $rows = KasTransaksi::with(['kategori'])
            ->where('kelas_id', $this->kelas->id)
            ->when($this->filters['bulan'] ?? null, fn ($q, $v) => $q->whereMonth('tanggal', $v))
            ->when($this->filters['tahun'] ?? null, fn ($q, $v) => $q->whereYear('tanggal', $v))
            ->when($this->filters['kategori_id'] ?? null, fn ($q, $v) => $q->where('kategori_id', $v))
            ->when($this->filters['jenis'] ?? null, fn ($q, $v) =>
                $q->whereHas('kategori', fn ($k) => $k->where('jenis', $v))
            )
            ->orderBy('tanggal')
            ->orderBy('id')
            ->get();

        return $rows->map(function ($t, $i) {
            $jenis  = $t->kategori?->jenis ?? '-';
            $jumlah = (float) $t->jumlah;

            return [
                $i + 1,
                $t->tanggal->format('d/m/Y'),
                $t->keterangan ?? '-',
                $t->kategori?->nama ?? '-',
                $jenis === 'pemasukan' ? 'Pemasukan' : ($jenis === 'pengeluaran' ? 'Pengeluaran' : '-'),
                $jumlah,
            ];
        });
    }

    public function styles(Worksheet $sheet): array
    {
        $lastRow = $sheet->getHighestRow();

        // Format kolom Jumlah sebagai currency
        $sheet->getStyle("F2:F{$lastRow}")
            ->getNumberFormat()
            ->setFormatCode(NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);

        // Right-align jumlah
        $sheet->getStyle("F1:F{$lastRow}")
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_RIGHT);

        return [
            1 => [
                'font'      => ['bold' => true],
                'fill'      => ['fillType' => 'solid', 'startColor' => ['rgb' => 'E2E8F0']],
                'alignment' => ['horizontal' => 'center'],
            ],
        ];
    }
}
