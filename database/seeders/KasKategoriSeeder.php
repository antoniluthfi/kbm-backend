<?php

namespace Database\Seeders;

use App\Models\KasKategori;
use Illuminate\Database\Seeder;

class KasKategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategori = [
            ['nama' => 'Shodaqoh / Iuran', 'jenis' => 'pemasukan'],
            ['nama' => 'Kas Kegiatan',      'jenis' => 'pemasukan'],
            ['nama' => 'Donasi',            'jenis' => 'pemasukan'],
            ['nama' => 'Konsumsi',          'jenis' => 'pengeluaran'],
            ['nama' => 'Peralatan / ATK',   'jenis' => 'pengeluaran'],
            ['nama' => 'Transport',         'jenis' => 'pengeluaran'],
            ['nama' => 'Event / Kegiatan',  'jenis' => 'pengeluaran'],
            ['nama' => 'Lain-lain',         'jenis' => 'pengeluaran'],
        ];

        foreach ($kategori as $item) {
            KasKategori::firstOrCreate(
                ['nama' => $item['nama'], 'jenis' => $item['jenis']],
                ['is_aktif' => true]
            );
        }
    }
}
