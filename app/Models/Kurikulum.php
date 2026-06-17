<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Kurikulum extends Model
{
    protected $table = 'kurikulum';

    protected $fillable = [
        'kelas_id',
        'nama',
        'tahun_ajaran',
        'deskripsi',
    ];

    public function scopeTahunAjaran(Builder $query, string $ta): Builder
    {
        return $query->where('tahun_ajaran', $ta);
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    public function bab(): HasMany
    {
        return $this->hasMany(BabKurikulum::class)->orderBy('urutan');
    }

    public function materi(): HasMany
    {
        return $this->hasMany(Materi::class)->orderBy('urutan');
    }
}
