<?php

namespace Database\Seeders\Kurikulum;

class KurikulumKelas2Seeder extends KurikulumKelasBaseSeeder
{
    protected function kelasNama(): string    { return 'Kelas 2'; }
    protected function kurikulumNama(): string { return 'Kurikulum Kelas 2'; }

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
            ['I',  'Ahlaq',              'Pribadi',                                                          '*'],
            ['I',  'Ahlaq',              'Keluarga',                                                         '*'],
            ['II', 'Dasar-Dasar Aqidah', 'Penyaksian tiada tuhan selain Allah',                              '*'],
            ['II', 'Dasar-Dasar Aqidah', 'Penyaksian Nabi Muhammad sebagai hamba dan Utusan Allah',          '*'],
            ['II', 'Kefahaman Agama',    'Faham Surga dan Neraka',                                           '*'],
            ['II', 'Praktik Ibadah',     'Mempraktikkan wudlu beserta doa sebelum dan sesudahnya',           '*'],
            ['III','Pribadi',            'Kemandirian Pribadi',                                              '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 3 halaman 1-8'],
            ['II', 'Baca Tulis', 'Menulis rangkaian kata arab'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat At-Takatsur'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-45"],
            ['II', 'Hafalan',    "Do'a Mohon Kesabaran"],
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
            ['I',  'Ahlaq',              'Ke Ulim Amri, Guru, dan Muballigh-Muballighot',                    '*'],
            ['I',  'Ahlaq',              'Ke Masyarakat',                                                    '*'],
            ['I',  'Ahlaq',              'Ke Lingkungan Alam Sekitar',                                       '*'],
            ['II', 'Dasar-Dasar Aqidah', 'Penyaksian tiada tuhan selain Allah',                              '*'],
            ['II', 'Dasar-Dasar Aqidah', 'Penyaksian Nabi Muhammad sebagai hamba dan Utusan Allah',          '*'],
            ['II', 'Kefahaman Agama',    'Faham Surga dan Neraka',                                           '*'],
            ['II', 'Praktik Ibadah',     'Mempraktikkan wudlu beserta doa sebelum dan sesudahnya',           '*'],
            ['II', 'Praktik Ibadah',     'Memperaktikkan Sholat beserta doanya',                             '*'],
            ['III','Pribadi',            'Kemandirian pribadi',                                              '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 3 halaman 9-16'],
            ['II', 'Baca Tulis', 'Menulis rangkaian kata arab'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat At-Takatsur'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-45"],
            ['II', 'Hafalan',    "Do'a Mohon Kesabaran"],
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
            ['I',  'Tata Krama',                 "Tata Krama ta'dim dan berbuat baik kepada kedua orang tua", '*'],
            ['II', 'Rukun Iman, Islam, Ihsan',   'Rukun Iman',                                                '*'],
            ['II', 'Rukun Iman, Islam, Ihsan',   'Rukun Islam',                                               '*'],
            ['II', 'Rukun Iman, Islam, Ihsan',   'Ihsan',                                                     '*'],
            ['II', 'Kefahaman Agama',            'Faham Surga dan Neraka',                                    '*'],
            ['II', 'Praktik Ibadah',             'Mempraktikkan sholat beserta bacaan dan doanya',            '*'],
            ['III','Pribadi',                    'Kemandirian Pribadi',                                       '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Tilawati 3 halaman 17-22'],
            ['II', 'Baca Tulis', 'Menulis rangkaian kata arab'],
            ['II', 'Hafalan',    "Al-Qur'an Surat Al-Qori'ah"],
            ['II', 'Hafalan',    "Asma'ul Husna 1-45"],
            ['II', 'Hafalan',    "Do'a Mohon Kesabaran"],
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
            ['I',   'Tata Krama',              'Menghormati yang lebih tua, menyayangi yang lebih muda',  '*'],
            ['II',  'Rukun Iman, Islam, Ihsan', 'Rukun Iman',                                             '*'],
            ['II',  'Rukun Iman, Islam, Ihsan', 'Rukun Islam',                                            '*'],
            ['II',  'Rukun Iman, Islam, Ihsan', 'Ihsan',                                                  '*'],
            ['II',  'Kefahaman Agama',          'Faham Surga dan Neraka',                                 '*'],
            ['II',  'Praktik Ibadah',           'Menjaga kesucian (mengenal suci najis)',                 '*'],
            ['III', 'Pribadi',                  'Kemandirian Pribadi',                                    '*'],
        ];

        $individu = [
            ['II', 'Baca Tulis', 'Tilawati 3 halaman 23-30'],
            ['II', 'Baca Tulis', 'Menulis rangkaian kata arab'],
            ['II', 'Hafalan',    "Al-Qur'an Surat Al-Qori'ah"],
            ['II', 'Hafalan',    "Asma'ul Husna 1-50"],
            ['II', 'Hafalan',    "Do'a Mohon Kesehatan"],
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
            ['I',   'Tata Krama',              'Menghormati guru dan Mubaligh-Muballighot',                         '*'],
            ['II',  'Rukun Iman, Islam, Ihsan', 'Rukun Iman',                                                       '*'],
            ['II',  'Pengertian QHJ',           'Pengertian AL-Quran',                                              '*'],
            ['II',  'Pengertian QHJ',           'Pengertian AL-Hadist',                                             '*'],
            ['II',  'Pengertian QHJ',           'Pengertian Jamaah',                                                '*'],
            ['II',  'Kefahaman Agama',          'Mengetahui Kewajiban ibadah berdasar Al-Quran dan Hadist',         '*'],
            ['II',  'Kefahaman Agama',          'Mengetahui Rukun Iman',                                            '*'],
            ['II',  'Kefahaman Agama',          'Mengetahui Rukun Islam',                                           '*'],
            ['II',  'Praktik Ibadah',           'Menjaga kesucian (mengenal suci najis)',                           '*'],
            ['II',  'Praktik Ibadah',           'Cara buang air kecil dan besar',                                   '*'],
            ['III', 'Pribadi',                  'Kemandirian dalam keluarga',                                       '*'],
        ];

        $individu = [
            ['II', 'Baca Tulis', 'Tilawati 3 halaman 31-38'],
            ['II', 'Baca Tulis', 'Menulis rangkaian kata arab'],
            ['II', 'Hafalan',    "Al-Qur'an Surat Al-Qori'ah"],
            ['II', 'Hafalan',    "Asma'ul Husna 1-50"],
            ['II', 'Hafalan',    "Do'a Mohon Kesehatan"],
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
            ['I',   'Tata Krama',              'Tata Krama bergaul dengan teman',                                   '*'],
            ['II',  'Rukun Iman, Islam, Ihsan', 'Rukun Iman',                                                       '*'],
            ['II',  'Pengertian QHJ',           'Pengertian AL-Quran',                                              '*'],
            ['II',  'Pengertian QHJ',           'Pengertian AL-Hadist',                                             '*'],
            ['II',  'Pengertian QHJ',           'Pengertian Jamaah',                                                '*'],
            ['II',  'Kefahaman Agama',          'Wajibnya taat dan haramnya maksiat',                               '*'],
            ['II',  'Kefahaman Agama',          'Mengetahui Rukun Iman',                                            '*'],
            ['II',  'Kefahaman Agama',          'Mengetahui Rukun Islam',                                           '*'],
            ['II',  'Praktik Ibadah',           'Menjaga kesucian (mengenal suci najis)',                           '*'],
            ['II',  'Praktik Ibadah',           'Cara buang air kecil dan besar',                                   '*'],
            ['III', 'Pribadi',                  'Kemandirian dalam keluarga',                                       '*'],
        ];

        $individu = [
            ['II', 'Baca Tulis', 'Tilawati 3 halaman 31-38'],
            ['II', 'Baca Tulis', 'Menulis rangkaian kata arab'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-50"],
            ['II', 'Hafalan',    "Do'a Mohon Kesehatan"],
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
            ['I',   'Tata Krama',    'Tata Krama ketika di masjid',                                      '*'],
            ['I',   'Tata Krama',    'Tata Krama ketika di tempat pengajian dan sekolah',                '*'],
            ['II',  'Keilmuan',      'Hukum Halal haram',                                                '*'],
            ['II',  'Kefahaman Agama', 'Mengetahui Quran Hadist Jamaah',                                 '*'],
            ['II',  'Kefahaman Agama', 'Mengetahui taat dan maksiat',                                    '*'],
            ['II',  'Praktik Ibadah', 'Mempraktikkan cara mensucikan najis setelah kencing dan berak',   '*'],
            ['III', 'Pribadi',       'Kemandirian dalam keluarga',                                       '*'],
        ];

        $individu = [
            ['II', 'Baca Tulis', 'Tilawati 4 halaman 1-8'],
            ['II', 'Baca Tulis', 'Menulis kata Arab baku/potongan ayat'],
            ['II', 'Hafalan',    "Al-Qur'an Surat Al-'Adiyat"],
            ['II', 'Hafalan',    "Asma'ul Husna 1-55"],
            ['II', 'Hafalan',    "Do'a Ketika Bersin"],
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
            ['I',   'Tata Krama',    'Tata Krama terhadap lingkungan dan alam sekitar',                  '*'],
            ['II',  'Keilmuan',      'Pengetahuan hukum halal-harom',                                    '*'],
            ['II',  'Kefahaman Agama', 'Mengetahui Quran Hadist Jamaah',                                 '*'],
            ['II',  'Kefahaman Agama', 'Mengetahui taat dan maksiat',                                    '*'],
            ['II',  'Kefahaman Agama', 'Mengetahui suci dan najis (thoharoh)',                           '*'],
            ['II',  'Praktik Ibadah', 'Mempraktikkan cara mensucikan najis setelah kencing dan berak',   '*'],
            ['II',  'Praktik Ibadah', 'Mempraktikkan sholat berjamaah',                                  '*'],
            ['III', 'Pribadi',       'Kemandirian dalam keluarga',                                       '*'],
        ];

        $individu = [
            ['II', 'Baca Tulis', 'Tilawati 4 halaman 9-16'],
            ['II', 'Baca Tulis', 'Menulis kata Arab baku/potongan ayat'],
            ['II', 'Hafalan',    "Al-Qur'an Surat Al-'Adiyat"],
            ['II', 'Hafalan',    "Asma'ul Husna 1-55"],
            ['II', 'Hafalan',    "Do'a Ketika Bersin"],
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
            ['I',   'Tata Krama',    'Tata Krama terhadap Ulil Amri',                                    '*'],
            ['II',  'Thoharoh',      'Thoharoh',                                                         '*'],
            ['II',  'Thoharoh',      'Sholat',                                                           '*'],
            ['II',  'Kefahaman Agama', "Faham Jama'ah",                                                  '*'],
            ['II',  'Kefahaman Agama', 'Mempraktikkan sholat berjamaah',                                 '*'],
            ['III', 'Pribadi',       'Kemandirian dalam lingkungan jamaah dan sekolah',                  '*'],
        ];

        $individu = [
            ['II', 'Baca Tulis', 'Tilawati 4 halaman 17-22'],
            ['II', 'Baca Tulis', 'Menulis kata Arab baku/potongan ayat'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-55"],
            ['II', 'Hafalan',    "Do'a Ketika Bersin"],
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
            ['I',   'Tata Krama',         'Tata Krama bertamu/diajak bertamu dan kedatangan tamu',  '*'],
            ['II',  'Thoharoh dan Sholat', 'Thoharoh',                                              '*'],
            ['II',  'Thoharoh dan Sholat', 'Sholat',                                                '*'],
            ['II',  'Kefahaman Agama',    'Mengetahui 5 bab',                                       '*'],
            ['II',  'Kefahaman Agama',    'Mengetahui 4 tali kelimanan',                            '*'],
            ['II',  'Praktik Ibadah',     'Mempraktikkan dzikir setiap setelah sholat',             '*'],
            ['III', 'Pribadi',            'Mandiri di lingkungan jamaah dan sekolah',               '*'],
        ];

        $individu = [
            ['II', 'Baca Tulis', 'Tilawati 4 halaman 23-30'],
            ['II', 'Baca Tulis', 'Menulis kata Arab baku/potongan ayat'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Az-Zalzalah'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-60"],
            ['II', 'Hafalan',    "Do'a Ketika Ada Angin Kencang"],
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
            ['I',   'Tata Krama',    'Tata Krama berpakaian',                                      '*'],
            ['I',   'Tata Krama',    'Tata Krama Tidur',                                           '*'],
            ['II',  'Keilmuan',      'Pengertian puasa',                                           '*'],
            ['II',  'Kefahaman Agama', 'Pengertian 3 Sukses',                                      '*'],
            ['II',  'Kefahaman Agama', 'Pengertian Jamaah',                                        '*'],
            ['II',  'Praktik Ibadah', 'Sholat berjamaah',                                         '*'],
            ['III', 'Pribadi',       'Kemandirian dalam lingkungan jamaah dan sekolah',            '*'],
        ];

        $individu = [
            ['II', 'Baca Tulis', 'Bacaan Tilawati 4 hal 31-38'],
            ['II', 'Baca Tulis', 'Menulis kata arab baku (pegon)'],
            ['II', 'Hafalan',    "Do'a ketika ada angin kencang"],
            ['II', 'Hafalan',    'Pengertian puasa (Sunah dan wajib)'],
            ['II', 'Hafalan',    'Pengertian 3 Sukses'],
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
            ['I',   'Tata Krama',    'Tata Krama ketika menguap',                                  '*'],
            ['I',   'Tata Krama',    'Tata Krama ketika bersin',                                   '*'],
            ['II',  'Keilmuan',      'Puasa',                                                      '*'],
            ['II',  'Kefahaman Agama', 'Mengetahui Tri Sukses',                                    '*'],
            ['II',  'Kefahaman Agama', 'Mengetahui 6 Thobiat Luhur',                               '*'],
            ['II',  'Kefahaman Agama', 'Mengetahui Pengertian Jamaah',                             '*'],
            ['II',  'Praktik Ibadah', 'Mempraktikkan doa-doa yang telah dihafal',                  '*'],
            ['III', 'Pribadi',       'Kemandirian dalam lingkungan jamaah dan sekolah',            '*'],
        ];

        $individu = [
            ['II', 'Baca Tulis', 'Tilawati 4 halaman 39-44'],
            ['II', 'Baca Tulis', 'Menulis kata Arab baku/potongan ayat'],
            ['II', 'Hafalan',    'Al-Qur\'an Surat Az-Zalzalah'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-60"],
            ['II', 'Hafalan',    "Do'a Ketika Ada Angin Kencang"],
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
