<?php

namespace Database\Seeders\Kurikulum;

class KurikulumUsmanSeeder extends KurikulumKelasBaseSeeder
{
    protected function kelasNama(): string    { return 'Kelas Usman'; }
    protected function kurikulumNama(): string { return 'Kurikulum Kelas Usman'; }

    protected function materiData(): array
    {
        // TODO: isi dengan data kurikulum Kelas Usman sesungguhnya
        return [];
    }
}
