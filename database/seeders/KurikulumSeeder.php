<?php

namespace Database\Seeders;

use Database\Seeders\Kurikulum\KurikulumKelas1Seeder;
use Database\Seeders\Kurikulum\KurikulumKelas2Seeder;
use Database\Seeders\Kurikulum\KurikulumKelas3Seeder;
use Database\Seeders\Kurikulum\KurikulumKelas4Seeder;
use Database\Seeders\Kurikulum\KurikulumKelas5Seeder;
use Database\Seeders\Kurikulum\KurikulumKelas6Seeder;
use Database\Seeders\Kurikulum\KurikulumPAUDSeeder;
use Database\Seeders\Kurikulum\KurikulumPraRemajaSeeder;
use Database\Seeders\Kurikulum\KurikulumRemajaSeeder;
use Database\Seeders\Kurikulum\KurikulumUsmanSeeder;
use Illuminate\Database\Seeder;

class KurikulumSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            KurikulumPAUDSeeder::class,
            KurikulumKelas1Seeder::class,
            KurikulumKelas2Seeder::class,
            KurikulumKelas3Seeder::class,
            KurikulumKelas4Seeder::class,
            KurikulumKelas5Seeder::class,
            KurikulumKelas6Seeder::class,
            KurikulumPraRemajaSeeder::class,
            KurikulumRemajaSeeder::class,
            KurikulumUsmanSeeder::class,
        ]);
    }
}
