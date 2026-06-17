<?php

namespace Database\Seeders\Kurikulum;

class KurikulumRemajaSeeder extends KurikulumKelasBaseSeeder
{
    protected function kelasNama(): string    { return 'Kelas Remaja'; }
    protected function kurikulumNama(): string { return 'Kurikulum Kelas Remaja'; }

    protected function materiData(): array
    {
        // TODO: isi dengan data kurikulum Kelas Remaja sesungguhnya
        return [];
    }
}
