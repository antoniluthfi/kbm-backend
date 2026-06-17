<?php

namespace Database\Seeders\Kurikulum;

class KurikulumKelas4Seeder extends KurikulumKelasBaseSeeder
{
    protected function kelasNama(): string    { return 'Kelas 4'; }
    protected function kurikulumNama(): string { return 'Kurikulum Kelas 4'; }

    // Data real Januari dari dokumen kurikulum. Bulan lain representatif.
    protected function materiData(): array
    {
        return array_merge(
            // ── Semester 2 (Jan–Jun) ──
            [
                // Januari — real data dari gambar kurikulum
                ['bab' => 'I',   'sub_bab' => 'Tata Krama',       'judul' => 'Bertamu/diajak bertamu/kedatangan tamu',  'tipe' => 'umum',     'bulan' => 'januari'],
                ['bab' => 'I',   'sub_bab' => 'Tata Krama',       'judul' => 'Berpakaian',                              'tipe' => 'umum',     'bulan' => 'januari'],
                ['bab' => 'II',  'sub_bab' => 'Keilmuan',         'judul' => 'Pengetahuan hukum halal haram',           'tipe' => 'umum',     'bulan' => 'januari'],
                ['bab' => 'II',  'sub_bab' => 'Kefahaman agama',  'judul' => 'Faham Al-Quran dan Al-Hadist',            'tipe' => 'umum',     'bulan' => 'januari'],
                ['bab' => 'II',  'sub_bab' => 'Praktik ibadah',   'judul' => 'Praktik dzikir setelah sholat',           'tipe' => 'umum',     'bulan' => 'januari'],
                ['bab' => 'III', 'sub_bab' => 'Kemandirian',      'judul' => 'Kemandirian dalam keluarga',              'tipe' => 'umum',     'bulan' => 'januari'],
                ['bab' => 'II',  'sub_bab' => 'Bacaan',           'judul' => 'Q.S. Al-Fatihah 1-7 s/d Al-Baqarah 1-61','tipe' => 'individu', 'bulan' => 'januari'],
                ['bab' => 'II',  'sub_bab' => 'Tulis',            'judul' => 'Terampil Menulis Arab dan Pegon',          'tipe' => 'individu', 'bulan' => 'januari'],
                ['bab' => 'II',  'sub_bab' => 'Hafalan Murajaah', 'judul' => 'Annas - Alqodr',                          'tipe' => 'individu', 'bulan' => 'januari'],
                ['bab' => 'II',  'sub_bab' => 'Hafalan Baru',     'judul' => 'Q.S. At-Tin 1-9',                         'tipe' => 'individu', 'bulan' => 'januari'],
                ['bab' => 'II',  'sub_bab' => 'Hafalan',          'judul' => 'Asmaul Husna 1-95',                       'tipe' => 'individu', 'bulan' => 'januari'],
                ['bab' => 'II',  'sub_bab' => 'Hafalan',          'judul' => "Do'a agar bisa bersyukur",                'tipe' => 'individu', 'bulan' => 'januari'],
            ],
            $this->bulan('februari',
                umum: [
                    ['I',   'Tata Krama',     'Berbicara dan berdebat yang baik'],
                    ['I',   'Tata Krama',     'Bergaul dengan teman sebaya'],
                    ['II',  'Keilmuan',       'Dalil-dalil tentang sholat fardhu'],
                    ['II',  'Praktik ibadah', "Praktik sholat berjama'ah"],
                    ['III', 'Kemandirian',    'Disiplin waktu belajar di rumah'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. Al-Baqarah 62-130'],
                    ['II', 'Tulis',            'Terampil Menulis Arab dan Pegon'],
                    ['II', 'Hafalan Murajaah', 'Al-Qadr - Al-Bayyinah'],
                    ['II', 'Hafalan Baru',     'Q.S. Al-Insyirah'],
                    ['II', 'Hafalan',          "Do'a masuk dan keluar masjid"],
                ]
            ),
            $this->bulan('maret',
                umum: [
                    ['I',   'Tata Krama',     'Menghormati orang tua dan guru'],
                    ['I',   'Akhlak Terpuji', 'Sifat jujur dan amanah'],
                    ['II',  'Keilmuan',       'Rukun Islam dan maknanya'],
                    ['II',  'Praktik ibadah', 'Praktik sholat dhuha'],
                    ['III', 'Kemandirian',    'Kemandirian dalam ibadah harian'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. Al-Baqarah 131-200'],
                    ['II', 'Tulis',            'Terampil Menulis Arab dan Pegon'],
                    ['II', 'Hafalan Murajaah', 'Al-Qadr - Al-Zalzalah'],
                    ['II', 'Hafalan Baru',     'Q.S. Al-Fil'],
                    ['II', 'Hafalan',          "Do'a qunut"],
                ]
            ),
            $this->bulan('april',
                umum: [
                    ['I',   'Tata Krama',     'Adab membaca Al-Quran'],
                    ['II',  'Keilmuan',       'Pokok-pokok keimanan'],
                    ['II',  'Praktik ibadah', 'Praktik sholat jenazah'],
                    ['III', 'Kemandirian',    'Menjaga kebersihan diri dan lingkungan'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. Al-Baqarah 201-252'],
                    ['II', 'Tulis',            'Terampil Menulis Arab dan Pegon'],
                    ['II', 'Hafalan Murajaah', 'Al-Qadr - Al-Humazah'],
                    ['II', 'Hafalan Baru',     'Q.S. Al-Lahab'],
                    ['II', 'Hafalan',          "Do'a setelah sholat fardhu"],
                ]
            ),
            $this->bulan('mei',
                umum: [
                    ['I',   'Tata Krama',     'Adab di dalam majelis ilmu'],
                    ['II',  'Keilmuan',       'Kisah Nabi dan hikmahnya'],
                    ['II',  'Praktik ibadah', 'Praktik wudhu yang benar'],
                    ['III', 'Kemandirian',    'Mandiri dalam mempersiapkan belajar'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. Al-Baqarah 253-286'],
                    ['II', 'Tulis',            'Terampil Menulis Arab dan Pegon'],
                    ['II', 'Hafalan Murajaah', 'Al-Qadr - Al-Ikhlas'],
                    ['II', 'Hafalan Baru',     'Q.S. An-Nas'],
                    ['II', 'Hafalan',          "Do'a keluar rumah"],
                ]
            ),
            $this->bulan('juni',
                umum: [
                    ['I',   'Tata Krama',  'Evaluasi akhlak semester — refleksi diri'],
                    ['II',  'Keilmuan',    'Review materi Alim Faqih semester 2'],
                    ['III', 'Kemandirian', 'Presentasi proyek kemandirian semester'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Review bacaan semester 2'],
                    ['II', 'Hafalan Murajaah', 'Murajaah semester 2 (Annas - Alqodr)'],
                    ['II', 'Hafalan Baru',     'Q.S. Al-Falaq'],
                ]
            ),
            // ── Semester 1 (Jul–Des) ──
            $this->bulan('juli',
                umum: [
                    ['I',   'Tata Krama',     'Adab masuk dan keluar rumah'],
                    ['II',  'Keilmuan',       'Mengenal Asmaul Husna'],
                    ['II',  'Praktik ibadah', 'Praktik sholat berjamaah'],
                    ['III', 'Kemandirian',    'Kemandirian dalam merapikan tempat tidur'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. Ali Imran 1-60'],
                    ['II', 'Tulis',            'Terampil Menulis Arab dan Pegon'],
                    ['II', 'Hafalan Murajaah', 'Annas - Al-Kafirun'],
                    ['II', 'Hafalan Baru',     'Q.S. Al-Maun'],
                    ['II', 'Hafalan',          "Do'a belajar"],
                ]
            ),
            $this->bulan('agustus',
                umum: [
                    ['I',   'Tata Krama',     'Adab bermain dan berolahraga'],
                    ['I',   'Akhlak Terpuji', 'Sifat sabar dan syukur'],
                    ['II',  'Keilmuan',       'Mengenal rukun iman secara mendalam'],
                    ['II',  'Praktik ibadah', 'Praktik tayamum'],
                    ['III', 'Kemandirian',    'Mandiri membantu pekerjaan rumah'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. Ali Imran 61-120'],
                    ['II', 'Tulis',            'Terampil Menulis Arab dan Pegon'],
                    ['II', 'Hafalan Murajaah', 'Annas - Al-Quraisy'],
                    ['II', 'Hafalan Baru',     'Q.S. Al-Fiil'],
                    ['II', 'Hafalan',          "Do'a naik kendaraan"],
                ]
            ),
            $this->bulan('september',
                umum: [
                    ['I',   'Tata Krama',     'Adab makan dan minum'],
                    ['II',  'Keilmuan',       'Kisah Nabi Adam dan Nabi Ibrahim'],
                    ['II',  'Praktik ibadah', 'Praktik sholat sunnah rawatib'],
                    ['III', 'Kemandirian',    'Kemandirian mengelola uang jajan'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. Ali Imran 121-180'],
                    ['II', 'Tulis',            'Terampil Menulis Arab dan Pegon'],
                    ['II', 'Hafalan Murajaah', 'Annas - Al-Humazah'],
                    ['II', 'Hafalan Baru',     'Q.S. Al-Ashr'],
                    ['II', 'Hafalan',          "Do'a sebelum dan sesudah makan"],
                ]
            ),
            $this->bulan('oktober',
                umum: [
                    ['I',   'Tata Krama',     'Adab terhadap tetangga'],
                    ['II',  'Keilmuan',       'Makna syahadat dan konsekuensinya'],
                    ['II',  'Praktik ibadah', 'Praktik membaca Al-Fatihah dengan tartil'],
                    ['III', 'Kemandirian',    'Mandiri menyelesaikan PR/tugas sekolah'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. Ali Imran 181-200 & An-Nisa 1-50'],
                    ['II', 'Tulis',            'Terampil Menulis Arab dan Pegon'],
                    ['II', 'Hafalan Murajaah', 'Annas - At-Takatsur'],
                    ['II', 'Hafalan Baru',     'Q.S. Al-Zalzalah'],
                    ['II', 'Hafalan',          "Do'a ketika hujan"],
                ]
            ),
            $this->bulan('november',
                umum: [
                    ['I',   'Tata Krama',     'Adab ketika sakit dan menjenguk orang sakit'],
                    ['II',  'Keilmuan',       'Pokok-pokok hukum thaharah'],
                    ['II',  'Praktik ibadah', 'Praktik zakat fitrah'],
                    ['III', 'Kemandirian',    'Kemandirian menata pakaian sendiri'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. An-Nisa 51-100'],
                    ['II', 'Tulis',            'Terampil Menulis Arab dan Pegon'],
                    ['II', 'Hafalan Murajaah', "Annas - Al-Qari'ah"],
                    ['II', 'Hafalan Baru',     'Q.S. Al-Adiyat'],
                    ['II', 'Hafalan',          "Do'a untuk kedua orang tua"],
                ]
            ),
            $this->bulan('desember',
                umum: [
                    ['I',   'Tata Krama',  'Evaluasi akhlak semester 1 — muhasabah diri'],
                    ['II',  'Keilmuan',    'Review materi Alim Faqih semester 1'],
                    ['III', 'Kemandirian', 'Presentasi proyek kemandirian semester 1'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Review bacaan semester 1'],
                    ['II', 'Hafalan Murajaah', 'Murajaah semester 1 (Annas - Al-Kafirun)'],
                    ['II', 'Hafalan Baru',     'Murajaah hafalan pilihan'],
                ]
            )
        );
    }
}
