<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,         // 1. users dulu (semua role)
            PengajarSeeder::class,     // 2. profil pengajar (butuh user)
            MuridSeeder::class,        // 3. profil murid + wali murid
            KelasSeeder::class,        // 4. data kelas
            KelasEnrollmentSeeder::class, // 5. assign pengajar & enroll murid ke kelas
            ProgramSeeder::class,      // 6. program/kegiatan + kelas yang ikut
            JadwalSeeder::class,       // 7. jadwal rutin per program & kelas (butuh kelas_pengajar)
            AbsensiSeeder::class,      // 8. pertemuan + absensi murid & pengajar
            KurikulumSeeder::class,    // 9. kurikulum + bab + materi (semua kelas)
            ProgressMateriMuridSeeder::class, // 10. progress materi per murid aktif
            KasKategoriSeeder::class,         // 11. kategori kas default
        ]);
    }
}
