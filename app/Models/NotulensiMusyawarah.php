<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NotulensiMusyawarah extends Model
{
    protected $table = 'notulensi_musyawarah';

    protected $fillable = [
        'musyawarah_id',
        'kategori',
        'isi',
        'penanggung_jawab',
        'status_tindak_lanjut',
    ];

    public function scopeOpen(Builder $query): Builder
    {
        return $query->where('status_tindak_lanjut', 'open');
    }

    public function musyawarah(): BelongsTo
    {
        return $this->belongsTo(Musyawarah::class);
    }
}
