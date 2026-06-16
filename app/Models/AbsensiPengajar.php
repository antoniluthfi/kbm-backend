<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AbsensiPengajar extends Model
{
    protected $table = 'absensi_pengajar';

    protected $fillable = [
        'pertemuan_id',
        'pengajar_id',
        'pengajar_pengganti_id',
        'status',
        'catatan',
    ];

    public function pertemuan(): BelongsTo
    {
        return $this->belongsTo(Pertemuan::class);
    }

    public function pengajar(): BelongsTo
    {
        return $this->belongsTo(Pengajar::class);
    }

    public function pengajarPengganti(): BelongsTo
    {
        return $this->belongsTo(Pengajar::class, 'pengajar_pengganti_id');
    }
}
