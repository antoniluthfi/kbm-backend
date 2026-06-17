<?php

namespace Database\Seeders\Kurikulum;

class KurikulumKelas1Seeder extends KurikulumKelasBaseSeeder
{
    protected function kelasNama(): string    { return 'Kelas 1'; }
    protected function kurikulumNama(): string { return 'Kurikulum Kelas 1'; }

    protected function materiData(): array
    {
        return array_merge(
            $this->juli(),
            $this->agustus(),
            $this->september(),
            $this->oktober(),
            $this->november(),
            $this->desember(),
            $this->januari(),
            $this->februari(),
            $this->maret(),
            $this->april(),
            $this->mei(),
            $this->juni(),
        );
    }

    // -------------------------------------------------------------------------
    // JULI
    // -------------------------------------------------------------------------

    private function juli(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Akhlaq',           'Pribadi',               '*'],
            ['I',   'Tata Krama',       'Keluarga',              '*'],
            ['II',  'Keilmuan',         'Dasar dasar akidah',    '*'],
            ['II',  'Kefahaman Agama',  'Faham surga neraka',    '*'],
            ['II',  'Praktik Ibadah',   'Whudu beserta doanya',  '*'],
            ['III', 'Pribadi',          'Kemandirian pribadi',   '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'a. Tilawati 1 halaman 1-8'],
            ['II', 'Baca Tulis', 'b. Tulis huruf tunggal fathah : ا , ب , ت'],
            ['II', 'Baca Tulis', 'c. Menulis angka arab : 1 - 8'],
            ['II', 'Baca Tulis', 'd. Menulis huruf sambung ا , ب , ت'],
            ['II', 'Hafalan',    'e. Hafalan surat Al-Kautsar 1-3'],
            ['II', 'Hafalan',    'f. Asmaul Husna 1-25'],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'juli'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'juli'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // AGUSTUS
    // -------------------------------------------------------------------------

    private function agustus(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',         'Ulim Amri, Guru, dan Muballigh-Muballighot',                          '*'],
            ['I',   'Tata Krama',         'Masyarakat',                                                          '*'],
            ['I',   'Tata Krama',         'Lingkungan Alam Sekitar',                                             '*'],
            ['II',  'Dasar-dasar Aqidah', 'Penyaksian bahwa tiada Tuhan yang berhak disembah kecuali Allah',     '*'],
            ['II',  'Dasar-dasar Aqidah', 'Penyaksian bahwa sesungguhnya Nabi Muhammad adalah hamba dan utusan Allah', '*'],
            ['II',  'Faham Agama',        'Faham Surga dan Neraka',                                              '*'],
            ['II',  'Praktik Ibadah',     'Mempraktikkan wudlu beserta doa sebelum dan sesudahnya',              '*'],
            ['II',  'Praktik Ibadah',     'Mempraktikkan sholat beserta bacaan dan doanya',                      '*'],
            ['III', 'Kemandirian',        'Kemandirian Pribadi',                                                 '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 1 halaman 9-16'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah'],
            ['II', 'Baca Tulis', 'Menulis angka Arab 9 - 16'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Al-Kautsar'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-25"],
            ['II', 'Hafalan',    'Dzikir Setelah Sholat'],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'agustus'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'agustus'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // SEPTEMBER
    // -------------------------------------------------------------------------

    private function september(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',               "Tata Krama ta'dim dan berbuat baik kepada kedua orang tua", '*'],
            ['II',  'Rukun Iman, Islam dan Ihsan', 'Rukun Iman',                                             '*'],
            ['II',  'Rukun Iman, Islam dan Ihsan', 'Rukun Islam',                                            '*'],
            ['II',  'Rukun Iman, Islam dan Ihsan', 'Ihsan',                                                  '*'],
            ['II',  'Faham Agama',              'Faham Surga dan Neraka',                                    '*'],
            ['II',  'Praktik Ibadah',           'Mempraktikkan sholat beserta bacaan dan doanya',            '*'],
            ['III', 'Kemandirian',              'Kemandirian Pribadi',                                       '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 1 halaman 17-22'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah'],
            ['II', 'Baca Tulis', 'Menulis angka arab 17-24'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Al-Ma\'un'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-25"],
            ['II', 'Hafalan',    "Do'a Ketetapan Iman"],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'september'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'september'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // OKTOBER
    // -------------------------------------------------------------------------

    private function oktober(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',                 'Tata Krama menghormati saudara yang lebih tua dan menyayangi saudara yang lebih muda', '*'],
            ['II',  'Rukun Iman, Islam dan Ihsan', 'Rukun Iman',                                              '*'],
            ['II',  'Rukun Iman, Islam dan Ihsan', 'Rukun Islam',                                             '*'],
            ['II',  'Faham Agama',                 'Ihsan',                                                   '*'],
            ['II',  'Faham Agama',                 'Faham Surga dan Neraka',                                  '*'],
            ['II',  'Praktik Ibadah',              'Mempraktikkan menjaga kesucian (mengenal suci najis)',     '*'],
            ['III', 'Kemandirian',                 'Kemandirian Pribadi',                                     '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 1 halaman 23-30'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah'],
            ['II', 'Baca Tulis', 'Menulis angka Arab 25-32'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Al-Ma\'un'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-30"],
            ['II', 'Hafalan',    "Do'a Minta Ilmu yang Bermanfaat"],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'oktober'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'oktober'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // NOVEMBER
    // -------------------------------------------------------------------------

    private function november(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',       'Tata krama menghormati Guru dan Muballigh-Muballighot',              '*'],
            ['II',  'Pengertian QHJ',   'Pengertian Al-Qur\'an',                                              '*'],
            ['II',  'Pengertian QHJ',   'Pengertian Al-Hadits',                                               '*'],
            ['II',  'Taat dan Maksiat', "Pengertian Jama'ah",                                                 '*'],
            ['II',  'Taat dan Maksiat', 'Pengetahuan wajibnya taat dan haromnya maksiat',                     '*'],
            ['II',  'Faham Agama',      'Faham Al-Quran dan Al-Hadist',                                       '*'],
            ['II',  'Praktik Ibadah',   'Mempraktikkan menjaga kesucian (mengenal suci najis)',                '*'],
            ['II',  'Praktik Ibadah',   'Mempraktikkan cara buang air kecil (kencing) dan air besar (berak)', '*'],
            ['III', 'Kemandirian',      'Kemandirian dalam keluarga',                                         '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 1 halaman 31-38'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah'],
            ['II', 'Baca Tulis', 'Menulis angka Arab 33-40'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Al-Quroisy'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-30"],
            ['II', 'Hafalan',    "Do'a Minta Ilham yang Baik"],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'november'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'november'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // DESEMBER
    // -------------------------------------------------------------------------

    private function desember(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',       'Tata Krama bergaul dengan teman',                                         '*'],
            ['I',   'Tata Krama',       'Tata Krama ketika di masjid',                                             '*'],
            ['II',  'Pengertian QHJ',   'Pengertian Al-Qur\'an',                                                   '*'],
            ['II',  'Pengertian QHJ',   'Pengertian Al-Hadits',                                                    '*'],
            ['II',  'Pengertian QHJ',   "Pengertian Jama'ah",                                                      '*'],
            ['II',  'Taat dan Maksiat', 'Pengetahuan wajibnya taat dan haromnya maksiat',                          '*'],
            ['II',  'Faham Agama',      'Faham Al-Quran dan Al-Hadist',                                            '*'],
            ['II',  'Praktik Ibadah',   'Mempraktikkan cara buang air kecil (kencing) dan air besar (berak)',      '*'],
            ['III', 'Kemandirian',      'Kemandirian dalam keluarga',                                              '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 1 halaman 39-44'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah - ب'],
            ['II', 'Baca Tulis', 'Menulis angka Arab 41-48'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Al-Quroisy'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-30"],
            ['II', 'Hafalan',    "Do'a Masuk Rumah"],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'desember'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'desember'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // JANUARI
    // -------------------------------------------------------------------------

    private function januari(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',   'Tata Krama ketika di tempat pengajian dan sekolah',             '*'],
            ['I',   'Tata Krama',   'Tata Krama terhadap lingkungan dan alam sekitar',                '*'],
            ['II',  'Keilmuan',     'Pengetahuan hukum halal-harom',                                  '*'],
            ['II',  'Keilmuan',     'Mengetahui taat dan maksiat',                                    '*'],
            ['II',  'Keilmuan',     'Mengetahui suci dan najis (thoharoh)',                           '*'],
            ['II',  'Faham Agama',  "Faham Al-Qur'an dan Al-Hadits Jamaah",                           '*'],
            ['II',  'Praktik Ibadah', 'Mempraktikkan cara mensucikan najis setelah kencing dan berak','*'],
            ['II',  'Praktik Ibadah', 'Mempraktikkan sholat berjamaah',                              '*'],
            ['III', 'Kemandirian',  'Kemandirian dalam keluarga',                                     '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 2 halaman 1-8'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah ع ظ'],
            ['II', 'Baca Tulis', 'Angka 39-56'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Al-Fiil'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-35"],
            ['II', 'Hafalan',    "Do'a Keluar Rumah"],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'januari'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'januari'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // FEBRUARI
    // -------------------------------------------------------------------------

    private function februari(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',     'Tata Krama terhadap Ulil Amri',                                       '*'],
            ['II',  'Keilmuan',       'Pengetahuan hukum halal-harom',                                       '*'],
            ['II',  'Keilmuan',       'Mengetahui taat dan maksiat',                                         '*'],
            ['II',  'Keilmuan',       'Mengetahui suci dan najis (thoharoh)',                                 '*'],
            ['II',  'Faham Agama',    "Faham Al-Qur'an dan Al-Hadits Jamaah",                                 '*'],
            ['II',  'Praktik Ibadah', 'Mempraktikkan cara mensucikan najis setelah kencing dan berak',        '*'],
            ['II',  'Praktik Ibadah', 'Mempraktikkan sholat berjamaah',                                      '*'],
            ['III', 'Kemandirian',    'Kemandirian dalam keluarga',                                           '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 2 halaman 9-16'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah غ ف'],
            ['II', 'Baca Tulis', 'Menulis angka Arab ٥٧ (57) - ٦٤ (64)'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Al-Fiil'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-35"],
            ['II', 'Hafalan',    "Do'a Pagi dan Sore"],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'februari'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'februari'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // MARET
    // -------------------------------------------------------------------------

    private function maret(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',         'Tata Krama bertamu/diajak bertamu dan kedatangan tamu',          '*'],
            ['II',  'Thoharoh dan Sholat', 'Thoharoh',                                                      '*'],
            ['II',  'Thoharoh dan Sholat', 'Sholat',                                                        '*'],
            ['II',  'Faham Agama',         "Faham Jama'ah (5 bab)",                                         '*'],
            ['II',  'Faham Agama',         "Faham Jama'ah (4 tali keimanan)",                               '*'],
            ['II',  'Praktik Ibadah',      'Mempraktikkan sholat berjamaah',                                '*'],
            ['III', 'Kemandirian',         'Kemandirian dalam lingkungan jamaah dan sekolah',                '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 2 halaman 17-22'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah'],
            ['II', 'Baca Tulis', 'Menulis angka Arab ٦٥ (65) - ٧٢ (72)'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Al-Humazah'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-35"],
            ['II', 'Hafalan',    "Do'a Masuk Masjid"],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'maret'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'maret'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // APRIL
    // -------------------------------------------------------------------------

    private function april(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',     'Tata Krama Berpakaian',                                      '*'],
            ['I',   'Tata Krama',     'Tata Krama Tidur',                                           '*'],
            ['II',  'Keilmuan',       'Wudhu',                                                      '*'],
            ['II',  'Keilmuan',       'Mandi Wajib',                                                '*'],
            ['II',  'Keilmuan',       'Tayamum',                                                    '*'],
            ['II',  'Faham Agama',    'Mengetahui 5 bab',                                           '*'],
            ['II',  'Faham Agama',    'Mengetahui 4 tali keimanan',                                 '*'],
            ['II',  'Praktik Ibadah', 'Dzikir sesudah Sholat',                                     '*'],
            ['III', 'Kemandirian',    'Kemandirian dalam lingkungan jamaah dan sekolah',             '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Huruf م , ن'],
            ['II', 'Baca Tulis', 'Angka ٧٣ ,٧٤ ,٧٥ ,٧٦ ,٧٧ ,٧٨ ,٧٩ ,٨٠'],
            ['II', 'Hafalan',    'Surah Al-Humazah'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-35"],
            ['II', 'Hafalan',    'Doa Keluar Masjid'],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'april'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'april'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // MEI
    // -------------------------------------------------------------------------
    private function mei(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',       'Tata krama ketika menguap',                              '*'],
            ['II',  'Keilmuan',         'Puasa',                                                  '*'],
            ['II',  'Faham Agama',      'Mengetahui 3 sukses generus',                            '*'],
            ['II',  'Faham Agama',      'Mengetahui 6 thabiat luhur',                             '*'],
            ['II',  'Faham Agama',      'Mengetahui pengertian Jamaah',                           '*'],
            ['II',  'Praktik Ibadah',   'Mempraktikan puasa ramadhan',                            '*'],
            ['III', 'Pribadi',          'Kemandirian dalam lingkungan jamaah dan sekolah',        '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Bacaan tilawati 2 hal 31 - 38'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah : ه , و'],
            ['II', 'Baca Tulis', 'Menulis angka arab : 81 - 92'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung : ه , و'],
            ['II', 'Hafalan',    'Hafalan surat An-nasr'],
            ['II', 'Hafalan',    'Asmaul husna 1 - 40'],
            ['II', 'Hafalan doa', 'Doa memakai pakaian'],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'mei'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'mei'];
        }
        return $rows;
    }

    // -------------------------------------------------------------------------
    // JUNI
    // -------------------------------------------------------------------------
    private function juni(): array
    {
        $umum = [
            // [bab_kode, sub_bab, judul, metode]
            ['I',   'Tata Krama',       'Tata krama ketika bersin',                              '*'],
            ['II',  'Keilmuan',         'Pengertian Puasa',                                      '*'],
            ['II',  'Faham Agama',      'Mengetahui 3 sukses generus',                           '*'],
            ['II',  'Faham Agama',      'Mengetahui 6 thabiat luhur',                            '*'],
            ['II',  'Faham Agama',      'Mengetahui pengertian Jamaah',                          '*'],
            ['II',  'Praktik Ibadah',   'Mempraktikan doa-doa yang telah di hafal',              '*'],
            ['III', 'Pribadi',          'Kemandirian dalam lingkungan jamaah dan sekolah',       '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Bacaan Tilawati 2 hal 39 - 44'],
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah : ي , ء'],
            ['II', 'Baca Tulis', 'Menulis angka arab : 93 - 100'],
            ['II', 'Baca Tulis', 'Menulis huruf sambung : ي , ء'],
            ['II', 'Hafalan',    'Hafalan surat Al-Asr 1-3'],
            ['II', 'Hafalan',    'Asmaul husna 1 - 40'],
            ['II', 'Hafalan',    'Doa berbuka puasa'],
        ];

        $rows = [];
        foreach ($umum as [$bab, $subBab, $judul, $metode]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'metode' => $metode, 'tipe' => 'umum', 'bulan' => 'juni'];
        }
        foreach ($individu as [$bab, $subBab, $judul]) {
            $rows[] = ['bab' => $bab, 'sub_bab' => $subBab, 'judul' => $judul, 'tipe' => 'individu', 'bulan' => 'juni'];
        }
        return $rows;
    }
}
