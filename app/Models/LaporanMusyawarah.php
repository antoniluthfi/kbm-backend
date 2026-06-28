<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LaporanMusyawarah extends Model
{
    protected $table = 'laporan_musyawarah';

    protected $fillable = [
        'musyawarah_id',
        'kelas_id',
        'snapshot_jumlah_murid',
        'snapshot_kehadiran_persen',
        'snapshot_progress_persen',
        'snapshot_progress_umum_persen',
        'snapshot_progress_individu_persen',
        'kendala_murid_auto',
        'kendala_pengajar',
        'planning',
        'tindak_lanjut',
    ];

    protected function casts(): array
    {
        return [
            'snapshot_jumlah_murid'             => 'integer',
            'snapshot_kehadiran_persen'         => 'float',
            'snapshot_progress_persen'          => 'float',
            'snapshot_progress_umum_persen'     => 'float',
            'snapshot_progress_individu_persen' => 'float',
        ];
    }

    public function musyawarah(): BelongsTo
    {
        return $this->belongsTo(Musyawarah::class);
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
