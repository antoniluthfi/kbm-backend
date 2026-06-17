<?php

namespace Database\Seeders\Kurikulum;

class KurikulumKelas6Seeder extends KurikulumKelasBaseSeeder
{
    protected function kelasNama(): string    { return 'Kelas 6'; }
    protected function kurikulumNama(): string { return 'Kurikulum Kelas 6'; }

    protected function materiData(): array
    {
        return array_merge(
            // ── Semester 1 (Jul–Des) ──
            $this->bulan('juli',
                umum: [
                    ['I',   'Tata Krama',      'Kepribadian muslim yang kaffah'],
                    ['I',   'Akhlak Terpuji',  'Adab kepada Allah dan Rasul-Nya'],
                    ['II',  'Keilmuan',        'Aqidah Islamiyyah — fondasi keimanan'],
                    ['II',  'Kefahaman agama', 'Fiqih ibadah mahdhah — tinjauan mendalam'],
                    ['II',  'Praktik ibadah',  'Praktik sholat khusyu dan benar'],
                    ['III', 'Kemandirian',     'Mandiri dalam menjalankan ibadah harian'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Q.S. Al-Maidah 51-120'],
                    ['II', 'Tulis',            'Khat Naskhi — latihan tulisan Al-Quran'],
                    ['II', 'Hafalan Murajaah', 'Juz 30 (Annas - Al-Ghasyiyah)'],
                    ['II', 'Hafalan Baru',     "Q.S. Al-A'raf 1-10"],
                    ['II', 'Hafalan',          "Do'a qunut nazilah"],
                    ['II', 'Makna',            'Tafsir Q.S. Al-Fatihah'],
                ]
            ),
            $this->bulan('agustus',
                umum: [
                    ['I',   'Tata Krama',      'Akhlak dalam pergaulan sosial'],
                    ['II',  'Keilmuan',        'Tauhid rububiyah, uluhiyah, asma wa sifat'],
                    ['II',  'Praktik ibadah',  'Praktik sholat malam (tahajud, witir)'],
                    ['III', 'Kemandirian',     'Kemandirian mengelola waktu untuk ibadah'],
                ],
                individu: [
                    ['II', 'Bacaan',           "Q.S. Al-An'am 1-60"],
                    ['II', 'Tulis',            'Khat Naskhi — kalimat thoyyibah'],
                    ['II', 'Hafalan Murajaah', "Juz 30 (Annas - Al-A'la)"],
                    ['II', 'Hafalan Baru',     "Q.S. Al-A'raf 11-25"],
                    ['II', 'Hafalan',          'Ayat Kursi beserta maknanya'],
                    ['II', 'Makna',            'Tafsir Q.S. Al-Baqarah 1-5'],
                ]
            ),
            $this->bulan('september',
                umum: [
                    ['I',   'Tata Krama',      'Adab menuntut ilmu dan berdiskusi'],
                    ['II',  'Keilmuan',        'Sirah Nabawiyah — periode Makkah'],
                    ['II',  'Kefahaman agama', 'Fiqih thaharah — bersuci secara lengkap'],
                    ['II',  'Praktik ibadah',  'Praktik mandi wajib'],
                    ['III', 'Kemandirian',     'Kemandirian dalam belajar mandiri'],
                ],
                individu: [
                    ['II', 'Bacaan',           "Q.S. Al-An'am 61-120"],
                    ['II', 'Tulis',            'Khat Naskhi — doa harian'],
                    ['II', 'Hafalan Murajaah', 'Juz 30 (Annas - Al-Buruj)'],
                    ['II', 'Hafalan Baru',     "Q.S. Al-A'raf 26-43"],
                    ['II', 'Hafalan',          'Q.S. Al-Baqarah 285-286'],
                    ['II', 'Makna',            'Tafsir Q.S. Al-Baqarah 255 (Ayat Kursi)'],
                ]
            ),
            $this->bulan('oktober',
                umum: [
                    ['I',   'Tata Krama',      'Adab dalam keluarga dan masyarakat luas'],
                    ['II',  'Keilmuan',        'Sirah Nabawiyah — periode Madinah'],
                    ['II',  'Kefahaman agama', 'Fiqih munakahat — pendahuluan'],
                    ['II',  'Praktik ibadah',  'Praktik adzan dan iqamah'],
                    ['III', 'Kemandirian',     'Kemandirian dalam berkontribusi di masyarakat'],
                ],
                individu: [
                    ['II', 'Bacaan',           "Q.S. Al-An'am 121-165"],
                    ['II', 'Tulis',            'Khat Naskhi — ayat pilihan'],
                    ['II', 'Hafalan Murajaah', 'Juz 30 (Annas - Al-Infitar)'],
                    ['II', 'Hafalan Baru',     'Q.S. Yasin 1-12'],
                    ['II', 'Hafalan',          'Q.S. Al-Mulk 1-5'],
                    ['II', 'Makna',            'Tafsir Q.S. Ali Imran 103'],
                ]
            ),
            $this->bulan('november',
                umum: [
                    ['I',   'Tata Krama',      'Kesiapan mental menjadi pemuda Islam'],
                    ['II',  'Keilmuan',        'Fiqih muamalah — perdagangan yang halal'],
                    ['II',  'Praktik ibadah',  'Praktik sholat istisqa dan gerhana'],
                    ['III', 'Kemandirian',     'Mandiri dalam memimpin (kepemimpinan dasar)'],
                ],
                individu: [
                    ['II', 'Bacaan',           "Q.S. Al-A'raf 1-50"],
                    ['II', 'Tulis',            'Khat Naskhi — kaligrafi nama Allah'],
                    ['II', 'Hafalan Murajaah', "Juz 29 (An-Nas - Al-Haqqah)"],
                    ['II', 'Hafalan Baru',     'Q.S. Yasin 13-30'],
                    ['II', 'Hafalan',          'Q.S. Al-Mulk 6-15'],
                    ['II', 'Makna',            'Tafsir Q.S. Al-Hujurat 10-13'],
                ]
            ),
            $this->bulan('desember',
                umum: [
                    ['I',   'Tata Krama',  'Refleksi akhir semester — evaluasi akhlak'],
                    ['II',  'Keilmuan',    'Review semester 1 — persiapan ujian'],
                    ['III', 'Kemandirian', 'Rencana pengembangan diri semester 2'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Review bacaan semester 1'],
                    ['II', 'Hafalan Murajaah', 'Murajaah Juz 30'],
                    ['II', 'Hafalan Baru',     'Pilihan hafalan ujian semester 1'],
                ]
            ),
            // ── Semester 2 (Jan–Jun) ──
            $this->bulan('januari',
                umum: [
                    ['I',   'Tata Krama',      'Adab dalam dunia digital dan media sosial'],
                    ['II',  'Keilmuan',        "Konsep akhirat — surga, neraka, hari hisab"],
                    ['II',  'Kefahaman agama', "Fiqih dakwah — amar ma'ruf nahi munkar"],
                    ['II',  'Praktik ibadah',  'Praktik ceramah/kultum singkat'],
                    ['III', 'Kemandirian',     'Kemandirian dalam berdakwah di lingkungan'],
                ],
                individu: [
                    ['II', 'Bacaan',           "Q.S. Al-A'raf 51-100"],
                    ['II', 'Tulis',            'Khat Naskhi — hiasan kaligrafi'],
                    ['II', 'Hafalan Murajaah', "Juz 29 (An-Nas - Al-Ma'arij)"],
                    ['II', 'Hafalan Baru',     'Q.S. Yasin 31-50'],
                    ['II', 'Hafalan',          'Q.S. Al-Mulk 16-22'],
                    ['II', 'Makna',            'Tafsir Q.S. Al-Ashr'],
                ]
            ),
            $this->bulan('februari',
                umum: [
                    ['I',   'Tata Krama',      'Adab dalam persahabatan dan ukhuwah Islamiyah'],
                    ['II',  'Keilmuan',        'Kisah sahabat Nabi dan keteladanannya'],
                    ['II',  'Praktik ibadah',  'Praktik membaca Al-Quran secara tartil bersama'],
                    ['III', 'Kemandirian',     'Mandiri merencanakan agenda ibadah bulanan'],
                ],
                individu: [
                    ['II', 'Bacaan',           "Q.S. Al-A'raf 101-150"],
                    ['II', 'Tulis',            'Khat Naskhi — Q.S. pendek pilihan'],
                    ['II', 'Hafalan Murajaah', 'Juz 29 (An-Nas - Al-Qalam)'],
                    ['II', 'Hafalan Baru',     'Q.S. Yasin 51-70'],
                    ['II', 'Hafalan',          'Q.S. Al-Mulk 23-30'],
                    ['II', 'Makna',            'Tafsir Q.S. Al-Ikhlas'],
                ]
            ),
            $this->bulan('maret',
                umum: [
                    ['I',   'Tata Krama',      'Adab dalam perbedaan pendapat (ikhtilaf)'],
                    ['II',  'Keilmuan',        'Fiqih kontemporer — isu-isu modern'],
                    ['II',  'Kefahaman agama', 'Hukum makanan dan minuman halal-haram'],
                    ['II',  'Praktik ibadah',  "Praktik khutbah Jum'at"],
                    ['III', 'Kemandirian',     'Kemandirian ekonomi — berwirausaha halal'],
                ],
                individu: [
                    ['II', 'Bacaan',           "Q.S. Al-A'raf 151-206"],
                    ['II', 'Tulis',            'Khat Naskhi — kaligrafi surah pendek'],
                    ['II', 'Hafalan Murajaah', 'Juz 28 (An-Nas - Al-Mujadilah)'],
                    ['II', 'Hafalan Baru',     'Q.S. Yasin 71-83'],
                    ['II', 'Hafalan',          'Q.S. Al-Baqarah 1-5'],
                    ['II', 'Makna',            'Tafsir Q.S. Al-Falaq'],
                ]
            ),
            $this->bulan('april',
                umum: [
                    ['I',   'Tata Krama',     'Adab kepada tamu dan bertamu'],
                    ['II',  'Keilmuan',       'Persiapan ujian akhir madrasah'],
                    ['II',  'Praktik ibadah', 'Simulasi ujian praktik ibadah'],
                    ['III', 'Kemandirian',    'Kemandirian menghadapi ujian dengan jujur'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Tilawah ujian — surah pilihan'],
                    ['II', 'Tulis',            'Ujian tulisan Arab'],
                    ['II', 'Hafalan Murajaah', 'Ujian murajaah Juz 30 penuh'],
                    ['II', 'Hafalan Baru',     'Hafalan ujian pilihan'],
                    ['II', 'Makna',            'Ujian makna surah pilihan'],
                ]
            ),
            $this->bulan('mei',
                umum: [
                    ['I',   'Tata Krama',  'Persiapan kelulusan — akhlak seorang alumni'],
                    ['II',  'Keilmuan',    'Review komprehensif seluruh materi TA'],
                    ['III', 'Kemandirian', 'Visi-misi pribadi menuju fase kehidupan berikutnya'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Khatam review Q.S. Al-Maidah'],
                    ['II', 'Hafalan Murajaah', 'Murajaah pilihan untuk kelulusan'],
                    ['II', 'Makna',            'Presentasi tafsir surah pilihan'],
                ]
            ),
            $this->bulan('juni',
                umum: [
                    ['I',   'Tata Krama',  'Wisuda — amanah sebagai alumni berakhlak'],
                    ['II',  'Keilmuan',    'Tausiyah perpisahan — bekal ilmu seumur hidup'],
                    ['III', 'Kemandirian', 'Penyerahan sertifikat dan penilaian akhir'],
                ],
                individu: [
                    ['II', 'Bacaan',           'Tilawah kelulusan'],
                    ['II', 'Hafalan Murajaah', 'Hafalan perpisahan'],
                    ['II', 'Makna',            'Muhasabah akhir tahun'],
                ]
            )
        );
    }
}
