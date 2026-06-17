<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BabKurikulum extends Model
{
    protected $table = 'bab_kurikulum';

    protected $fillable = [
        'kurikulum_id',
        'kode',
        'nama',
        'urutan',
    ];

    protected function casts(): array
    {
        return [
            'urutan' => 'integer',
        ];
    }

    public function scopeTerurut(Builder $query): Builder
    {
        return $query->orderBy('urutan');
    }

    public function kurikulum(): BelongsTo
    {
        return $this->belongsTo(Kurikulum::class);
    }

    public function materi(): HasMany
    {
        return $this->hasMany(Materi::class)->orderBy('urutan');
    }
}
