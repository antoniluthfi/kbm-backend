<?php

namespace Database\Seeders\Kurikulum;

class KurikulumPAUDSeeder extends KurikulumKelasBaseSeeder
{
    protected function kelasNama(): string    { return 'PAUD'; }
    protected function kurikulumNama(): string { return 'Kurikulum PAUD'; }

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
            ['I',  'Tata Krama',      'Keluarga & Adab Sosial (Ulil Amri, Guru, Muballigh, Tetangga)', null],
            ['I',  'Tata Krama',      'Ke ulil amri, guru, mubaligh-mubalighot',                       '*'],
            ['II', 'Keilmuan',        'Dasar-Dasar Aqidah',                                            '*'],
            ['II', 'Kefahaman Agama', 'Kefahaman Agama',                                               '*'],
            ['II', 'Praktik Ibadah',  'Mempraktikkan wudlu beserta doa sebelum dan sesudahnya',        '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', "Tsa' : ث  Jim : ج  Ha' : ح"],
            ['II', 'Baca Tulis', '4 (Empat) : ٤  5 (Lima) : ٥  6 (Enam) : ٦'],
            ['II', 'Hafalan',    'a. Al-Qur\'an Surat Al-Fatihah'],
            ['II', 'Hafalan',    "b. Asma'ul Husna 1-5"],
            ['II', 'Hafalan',    "c. Do'a Akan Tidur"],
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
            ['I',  'Tata Krama',      '4. Masyarakat',                                          '*'],
            ['I',  'Tata Krama',      '5. Lingkungan Alam Sekitar',                             '*'],
            ['II', 'Keilmuan',        '1) Dasar-Dasar Aqidah',                                  '*'],
            ['II', 'Kefahaman Agama', 'a. Faham Surga dan Neraka',                              '*'],
            ['II', 'Praktik Ibadah',  'b. Mempraktikkan sholat beserta bacaan dan doanya',      '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Latihan menulis huruf sambung : خ , د'],
            ['II', 'Baca Tulis', '7 (Tujuh) : ٧  8 (Delapan) : ٨'],
            ['II', 'Hafalan',    'a. Al-Qur\'an Surat An-Nas'],
            ['II', 'Hafalan',    "b. Asma'ul Husna 1-5"],
            ['II', 'Hafalan',    "c. Do'a Bangun Tidur"],
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
            ['I',  'Tata Krama',      "1. Tata krama ta'dim dan berbuat baik kepada kedua orang tua", '*'],
            ['II', 'Keilmuan',        'a. Rukun Iman',                                                '*'],
            ['II', 'Keilmuan',        'b. Rukun Islam',                                               '*'],
            ['II', 'Kefahaman Agama', 'a. Faham Surga dan Neraka',                                    '*'],
            ['II', 'Praktik Ibadah',  'b. Mempraktikkan sholat beserta bacaan dan doanya',            '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Dzal : ذ  Ro\' : ر  Zai : ز'],
            ['II', 'Baca Tulis', '9 (Sembilan) : ٩  10 (Sepuluh) : ١٠  11 (Sebelas) : ١١'],
            ['II', 'Hafalan',    'a. Al-Qur\'an Surat Al-Falaq'],
            ['II', 'Hafalan',    "b. Asma'ul Husna"],
            ['II', 'Hafalan',    "c. Do'a Bangun Tidur"],
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
            ['I',  'Tata Krama',      'Tata krama menghormati saudara yang lebih tua dan menyayangi saudara yang lebih muda', '*'],
            ['II', 'Keilmuan',        'a. Rukun Iman',                                                    '*'],
            ['II', 'Keilmuan',        'b. Rukun Islam',                                                   '*'],
            ['II', 'Keilmuan',        'Ihsan',                                                            '*'],
            ['II', 'Kefahaman Agama', 'a. Faham Surga dan Neraka',                                        '*'],
            ['II', 'Praktik Ibadah',  'c. Mempraktikkan menjaga kesucian (mengenal suci najis)',           '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Sin : س  Syin : ش  Shod : ص'],
            ['II', 'Baca Tulis', '(Dua belas) : ١٢  (Tiga belas) : ١٣  (Empat belas) : ١٤'],
            ['II', 'Hafalan',    'a. Al-Qur\'an Surat Al-Ikhlash'],
            ['II', 'Hafalan',    "b. Asma'ul Husna"],
            ['II', 'Hafalan',    "c. Do'a Ketika Akan Makan/Selesai"],
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
            ['I',  'Tata Krama',      '3. Tata krama menghormati Guru dan Muballigh-Muballighot',  '*'],
            ['II', 'Keilmuan',        'a. Rukun Iman',                                             '*'],
            ['II', 'Keilmuan',        'Rukun Islam',                                               '*'],
            ['II', 'Kefahaman Agama', 'a. Faham Surga dan Neraka',                                 '*'],
            ['II', 'Praktik Ibadah',  'c. Mempraktikkan menjaga kesucian (mengenal suci najis)',    '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', "Dlot : ض  Tho' : ط"],
            ['II', 'Baca Tulis', '15 (Lima belas) : ١٥  16 (Enam belas) : ١٦'],
            ['II', 'Hafalan',    'a. Al-Qur\'an Surat Al-Ikhlash'],
            ['II', 'Hafalan',    "b. Asma'ul Husna 1-10"],
            ['II', 'Hafalan',    "c. Do'a Ketika Akan Makan"],
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
            ['I',  'Tata Krama',                '4. Tata krama bergaul dengan teman',                                        '*'],
            ['II', 'Hafalan',                   'a. Pengertian Al-Qur\'an',                                                  '*'],
            ['II', 'Kefahaman Agama',           'b. Faham Al-Qur\'an dan Al-Hadits',                                         '*'],
            ['II', 'Praktik Ibadah',            'Mempraktikkan cara buang air kecil (kencing) dan air besar (berak)',         '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', "Dzo' : ظ  Ain : ع"],
            ['II', 'Baca Tulis', '17 (Tujuh belas) : ١٧  18 (Delapan belas) : ١٨'],
            ['II', 'Hafalan',    'a. Al-Qur\'an Surat Al-Masad/Al-Lahab'],
            ['II', 'Hafalan',    "b. Asma'ul Husna 1-15"],
            ['II', 'Hafalan',    'c. Do\'a Kebaikan Dunia dan Akhirat'],
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
            ['I',  'Tata Krama',      '5. Tata krama ketika di masjid',                                          '*'],
            ['I',  'Tata Krama',      '6. Tata krama ketika di tempat pengajian dan sekolah',                    '*'],
            ['II', 'Keilmuan',        "3) Pengertian Qur'an, Hadits, Jamaah",                                    '*'],
            ['II', 'Kefahaman Agama', "b. Faham Al-Qur'an dan Al-Hadits",                                        '*'],
            ['II', 'Praktik Ibadah',  'd. Mempraktikkan cara buang air kecil (kencing) dan air besar (berak)',   '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Ghoin : غ  Fa\' : ف'],
            ['II', 'Baca Tulis', '19 (Sembilan belas) : ١٩  20 (Dua puluh) : ٢٠'],
            ['II', 'Hafalan',    'a. Surat Al-Masad/Al-Lahab'],
            ['II', 'Hafalan',    "b. Asma'ul Husna 1-15"],
            ['II', 'Hafalan',    'c. Kebaikan Dunia dan Akhirat'],
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
            ['I',  'Tata Krama',      'Tata krama terhadap lingkungan dan alam sekitar',                '*'],
            ['II', 'Keilmuan',        "3) Pengertian Qur'an, Hadits, Jamaah",                           '*'],
            ['II', 'Kefahaman Agama', "b. Faham Al-Qur'an dan Al-Hadits",                               '*'],
            ['II', 'Praktik Ibadah',  'Mempraktikkan cara mensucikan najis setelah kencing dan berak',  '*'],
            ['II', 'Praktik Ibadah',  'Mempraktikkan doa-doa yang telah dihafal',                       '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Qof : ق  Kaf : ك  Lam : ل'],
            ['II', 'Baca Tulis', '21, 22, 23'],
            ['II', 'Hafalan',    'a. Al-Qur\'an Surat An-Nashr'],
            ['II', 'Hafalan',    "b. Asma'ul Husna"],
            ['II', 'Hafalan',    'c. Do\'a untuk Kedua Orang Tua'],
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
            ['I',   'Tata Krama',     'Tata Krama Berpakaian',                                    '*'],
            ['I',   'Tata Krama',     'Tata Krama Tidur',                                         '*'],
            ['II',  'Keilmuan',       'Wudhu',                                                    '*'],
            ['II',  'Keilmuan',       'Mandi Wajib',                                              '*'],
            ['II',  'Keilmuan',       'Tayamum',                                                  '*'],
            ['II',  'Faham Agama',    'Mengetahui 5 bab',                                         '*'],
            ['II',  'Faham Agama',    'Mengetahui 4 tali keimanan',                               '*'],
            ['II',  'Praktik Ibadah', 'Dzikir sesudah Sholat',                                   '*'],
            ['III', 'Kemandirian',    'Kemandirian dalam lingkungan jamaah dan sekolah',           '*'],
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
            ['I',   'Tata Krama',        'Tata krama ketika menguap',             '*'],
            ['II',  'Thoharoh dan Sholat','Thoharoh',                             '*'],
            ['II',  'Thoharoh dan Sholat','Sholat',                               '*'],
            ['II',  'Faham Agama',       'Faham Al-Quran dan Al-Hadist',          '*'],
            ['II',  'Faham Agama',       'Mempraktikkan doa yang dihafal',        '*'],
            ['III', 'Kemandirian',       'Kemandirian dalam keluarga',            '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Menulis huruf tunggal fathah : و , ه'],
            ['II', 'Baca Tulis', 'Angka Arab 26 (٢٦) dan 27 (٢٧)'],
            ['II', 'Hafalan',    'Surat Al-Kafirun'],
            ['II', 'Hafalan',    "Asma'ul Husna"],
            ['II', 'Hafalan',    'Doa masuk dan keluar WC'],
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
            ['II',  'Thoharoh dan Sholat', 'Toharoh',                                              '*'],
            ['II',  'Kefahaman Agama',     'Sholat',                                               '*'],
            ['II',  'Kefahaman Agama',     'Faham AL-Quran dan Al-Hadist',                         '*'],
            ['II',  'Praktik Ibadah',      'Mempraktikkan doa yang dihafal',                       '*'],
            ['II',  'Praktik Ibadah',      'Kemandirian dalam lingkungan sekolah',                 '*'],
            ['III', 'Pribadi',             'Kemandirian dalam lingkungan jamaah dan sekolah',       '*'],
        ];

        $individu = [
            // [bab_kode, sub_bab, judul]
            ['II', 'Baca Tulis', 'Baca tulis Hamzah (ء), Ya (ي)'],
            ['II', 'Baca Tulis', 'Angka arab 28 (٢٨) dan 29 (٢٩)'],
            ['II', 'Hafalan',    'Al-Kafirun'],
            ['II', 'Hafalan',    "Asma'ul Husna 1-20"],
            ['II', 'Hafalan',    'Doa Masuk dan Keluar WC'],
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
