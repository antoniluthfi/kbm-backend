<?php

namespace App\Services;

use App\Models\KasTransaksi;

class KasService
{
    public function hitungSaldo(int $kelasId, ?int $bulan = null, ?int $tahun = null): array
    {
        $base = KasTransaksi::with('kategori')
            ->where('kelas_id', $kelasId)
            ->when($bulan, fn ($q) => $q->whereMonth('tanggal', $bulan))
            ->when($tahun, fn ($q) => $q->whereYear('tanggal', $tahun));

        $transaksi = $base->get();

        $pemasukan   = $transaksi->filter(fn ($t) => $t->kategori?->jenis === 'pemasukan');
        $pengeluaran = $transaksi->filter(fn ($t) => $t->kategori?->jenis === 'pengeluaran');

        $totalPemasukan   = $pemasukan->sum('jumlah');
        $totalPengeluaran = $pengeluaran->sum('jumlah');

        $breakdownPemasukan = $pemasukan
            ->groupBy('kategori_id')
            ->map(fn ($items) => [
                'kategori' => $items->first()->kategori->nama,
                'jumlah'   => $items->sum('jumlah'),
            ])
            ->values();

        $breakdownPengeluaran = $pengeluaran
            ->groupBy('kategori_id')
            ->map(fn ($items) => [
                'kategori' => $items->first()->kategori->nama,
                'jumlah'   => $items->sum('jumlah'),
            ])
            ->values();

        return [
            'total_pemasukan'      => $totalPemasukan,
            'total_pengeluaran'    => $totalPengeluaran,
            'saldo'                => $totalPemasukan - $totalPengeluaran,
            'breakdown_pemasukan'  => $breakdownPemasukan,
            'breakdown_pengeluaran' => $breakdownPengeluaran,
        ];
    }
}
