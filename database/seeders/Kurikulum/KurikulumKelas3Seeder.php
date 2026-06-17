<?php

namespace Database\Seeders\Kurikulum;

class KurikulumKelas3Seeder extends KurikulumKelasBaseSeeder
{
    protected function kelasNama(): string    { return 'Kelas 3'; }
    protected function kurikulumNama(): string { return 'Kurikulum Kelas 3'; }

    protected function materiData(): array
    {
        // TODO: isi dengan data kurikulum Kelas 3 sesungguhnya
        return [];
    }
}
