<?php

namespace Database\Seeders\Kurikulum;

class KurikulumPraRemajaSeeder extends KurikulumKelasBaseSeeder
{
    protected function kelasNama(): string    { return 'Kelas Pra-Remaja'; }
    protected function kurikulumNama(): string { return 'Kurikulum Kelas Pra-Remaja'; }

    protected function materiData(): array
    {
        return array_merge(
            // ── Semester 1 (Jul–Des) ──
            $this->bulan('juli',
                umum: [
                    ['I',   'Syakhsiyah Islamiyah', 'Identitas diri sebagai muslim'],
                    ['I',   'Akhlak Sosial',        'Interaksi positif dalam pergaulan'],
                    ['II',  'Aqidah',               'Iman kepada Allah — pemahaman mendalam'],
                    ['II',  'Fiqih',                'Sholat — penyempurnaan dan kekhusyuan'],
                    ['III', 'Kemandirian',          'Mandiri merencanakan target ibadah'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Q.S. Al-Anfal 1-40'],
                    ['II', 'Tahfizh Murajaah', 'Juz 30 penuh'],
                    ['II', 'Tahfizh Baru',     'Q.S. Al-Kahfi 1-10'],
                    ['II', 'Pemahaman',        "Syarah hadits Arba'in no. 1-5"],
                    ['II', 'Khat',             'Kaligrafi asmaul husna'],
                ]
            ),
            $this->bulan('agustus',
                umum: [
                    ['I',   'Syakhsiyah Islamiyah', 'Gaya hidup islami di era modern'],
                    ['II',  'Aqidah',               'Iman kepada malaikat — hikmah dan dampaknya'],
                    ['II',  'Fiqih',                'Puasa sunnah dan keutamaannya'],
                    ['III', 'Kemandirian',          'Kemandirian ekonomi remaja — halal lifestyle'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Q.S. Al-Anfal 41-75'],
                    ['II', 'Tahfizh Murajaah', 'Juz 30 & Juz 29 (An-Nas - Al-Haqqah)'],
                    ['II', 'Tahfizh Baru',     'Q.S. Al-Kahfi 11-26'],
                    ['II', 'Pemahaman',        "Syarah hadits Arba'in no. 6-10"],
                    ['II', 'Khat',             'Kaligrafi Bismillah dan variasinya'],
                ]
            ),
            $this->bulan('september',
                umum: [
                    ['I',   'Syakhsiyah Islamiyah', 'Peran pemuda dalam dakwah Islam'],
                    ['II',  'Aqidah',               'Iman kepada kitab-kitab Allah'],
                    ['II',  'Fiqih',                'Munakahat — pernikahan dalam Islam (pengantar)'],
                    ['III', 'Kemandirian',          'Kemandirian dalam dakwah bi al-hal'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Q.S. At-Taubah 1-50'],
                    ['II', 'Tahfizh Murajaah', 'Juz 29 (An-Nas - Al-Qalam)'],
                    ['II', 'Tahfizh Baru',     'Q.S. Al-Kahfi 27-44'],
                    ['II', 'Pemahaman',        "Syarah hadits Arba'in no. 11-15"],
                    ['II', 'Khat',             'Kaligrafi ayat-ayat Al-Quran pilihan'],
                ]
            ),
            $this->bulan('oktober',
                umum: [
                    ['I',   'Akhlak Sosial', 'Adab bermedia sosial secara islami'],
                    ['II',  'Aqidah',        'Iman kepada para Nabi dan Rasul'],
                    ['II',  'Fiqih',         'Zakat dan infaq — implementasi dalam kehidupan'],
                    ['III', 'Kemandirian',   'Kemandirian berpikir kritis islami'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Q.S. At-Taubah 51-100'],
                    ['II', 'Tahfizh Murajaah', 'Juz 28 (An-Nas - Al-Mujadilah)'],
                    ['II', 'Tahfizh Baru',     'Q.S. Al-Kahfi 45-60'],
                    ['II', 'Pemahaman',        "Syarah hadits Arba'in no. 16-20"],
                    ['II', 'Khat',             'Kaligrafi nama-nama Nabi'],
                ]
            ),
            $this->bulan('november',
                umum: [
                    ['I',   'Syakhsiyah Islamiyah', 'Kontribusi muslim untuk peradaban'],
                    ['II',  'Aqidah',               'Iman kepada hari akhir — persiapan menghadapinya'],
                    ['II',  'Fiqih',                'Haji dan umrah — simulasi manasik'],
                    ['III', 'Kemandirian',          'Mandiri mempersiapkan kontribusi sosial'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Q.S. At-Taubah 101-129'],
                    ['II', 'Tahfizh Murajaah', 'Juz 28 (An-Nas - Al-Hasyr)'],
                    ['II', 'Tahfizh Baru',     'Q.S. Al-Kahfi 61-82'],
                    ['II', 'Pemahaman',        "Syarah hadits Arba'in no. 21-25"],
                    ['II', 'Khat',             'Kaligrafi Al-Quran untuk dekorasi islami'],
                ]
            ),
            $this->bulan('desember',
                umum: [
                    ['I',   'Akhlak Sosial', 'Evaluasi semester 1 — introspeksi diri'],
                    ['II',  'Aqidah',        'Review aqidah dan fiqih semester 1'],
                    ['III', 'Kemandirian',   'Penyusunan rencana pengembangan diri semester 2'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Review tilawah semester 1'],
                    ['II', 'Tahfizh Murajaah', 'Ujian murajaah Juz 30 & 29 pilihan'],
                    ['II', 'Pemahaman',        "Review syarah hadits Arba'in no. 1-25"],
                ]
            ),
            // ── Semester 2 (Jan–Jun) ──
            $this->bulan('januari',
                umum: [
                    ['I',   'Syakhsiyah Islamiyah', 'Visi hidup seorang muslim'],
                    ['II',  'Aqidah',               'Iman kepada qadha dan qadar — hikmah mendalam'],
                    ['II',  'Fiqih',                'Jihad — pengertian dan manifestasi kontemporer'],
                    ['III', 'Kemandirian',          'Kemandirian spiritual — muhasabah rutin'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Q.S. Yunus 1-50'],
                    ['II', 'Tahfizh Murajaah', "Juz 27 (An-Nas - Al-Waqi'ah)"],
                    ['II', 'Tahfizh Baru',     'Q.S. Al-Kahfi 83-98'],
                    ['II', 'Pemahaman',        "Syarah hadits Arba'in no. 26-30"],
                    ['II', 'Khat',             'Kaligrafi mushaf mini'],
                ]
            ),
            $this->bulan('februari',
                umum: [
                    ['I',   'Akhlak Sosial', 'Kepemimpinan dalam perspektif Islam'],
                    ['II',  'Aqidah',        'Asmaul Husna — penghayatan dan implementasi'],
                    ['II',  'Fiqih',         'Fiqih kontemporer — fatwa digital'],
                    ['III', 'Kemandirian',   'Mandiri memimpin kelompok kecil'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Q.S. Yunus 51-100'],
                    ['II', 'Tahfizh Murajaah', 'Juz 26 (An-Nas - Al-Ahqaf)'],
                    ['II', 'Tahfizh Baru',     'Q.S. Al-Kahfi 99-110'],
                    ['II', 'Pemahaman',        "Syarah hadits Arba'in no. 31-35"],
                    ['II', 'Khat',             'Kaligrafi hadits pilihan'],
                ]
            ),
            $this->bulan('maret',
                umum: [
                    ['I',   'Syakhsiyah Islamiyah', 'Muslim produktif dan bermanfaat'],
                    ['II',  'Aqidah',               'Maqashid syariah — tujuan hukum Islam'],
                    ['II',  'Fiqih',                'Fiqih muamalah kontemporer'],
                    ['III', 'Kemandirian',          'Kemandirian finansial — investasi halal'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Q.S. Yunus 101-109 & Hud 1-50'],
                    ['II', 'Tahfizh Murajaah', 'Juz 25 (An-Nas - Al-Jatsiyah)'],
                    ['II', 'Tahfizh Baru',     'Q.S. Maryam 1-15'],
                    ['II', 'Pemahaman',        "Syarah hadits Arba'in no. 36-40"],
                    ['II', 'Khat',             'Kaligrafi karya akhir semester'],
                ]
            ),
            $this->bulan('april',
                umum: [
                    ['I',   'Syakhsiyah Islamiyah', 'Persiapan menghadapi dunia nyata'],
                    ['II',  'Aqidah',               'Review komprehensif — ujian aqidah'],
                    ['II',  'Fiqih',                'Ujian praktik fiqih'],
                    ['III', 'Kemandirian',          'Kemandirian — ujian proyek sosial'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Ujian tilawah — surah pilihan'],
                    ['II', 'Tahfizh Murajaah', 'Ujian tahfizh Juz 30'],
                    ['II', 'Tahfizh Baru',     'Ujian hafalan baru — Q.S. Al-Kahfi'],
                    ['II', 'Pemahaman',        "Ujian syarah hadits Arba'in pilihan"],
                ]
            ),
            $this->bulan('mei',
                umum: [
                    ['I',   'Akhlak Sosial', 'Evaluasi akhlak — refleksi satu tahun'],
                    ['II',  'Aqidah',        'Tausiyah: Bekal ilmu menuju fase berikutnya'],
                    ['III', 'Kemandirian',   'Penutupan: Komitmen menjadi pemuda Islam'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Khatam tilawah semester 2'],
                    ['II', 'Tahfizh Murajaah', 'Murajaah akhir tahun pilihan'],
                    ['II', 'Pemahaman',        "Review Arba'in untuk perpisahan"],
                ]
            ),
            $this->bulan('juni',
                umum: [
                    ['I',   'Syakhsiyah Islamiyah', 'Wisuda Pra-Remaja — Amanah sebagai Pemuda Islam'],
                    ['II',  'Aqidah',               'Tausiyah wisuda: Islam adalah jalan hidup'],
                    ['III', 'Kemandirian',          'Penilaian akhir dan penyerahan sertifikat'],
                ],
                individu: [
                    ['II', 'Tilawah',          'Tilawah perpisahan'],
                    ['II', 'Tahfizh Baru',     'Hafalan wisuda — Q.S. Al-Kahfi penuh'],
                    ['II', 'Pemahaman',        'Tausiyah pribadi dari Q.S. pilihan'],
                ]
            )
        );
    }
}
