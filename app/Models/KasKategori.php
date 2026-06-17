<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KasKategori extends Model
{
    protected $table = 'kas_kategori';

    protected $fillable = [
        'nama',
        'jenis',
        'is_aktif',
    ];

    protected function casts(): array
    {
        return [
            'is_aktif' => 'boolean',
        ];
    }

    public function transaksi(): HasMany
    {
        return $this->hasMany(KasTransaksi::class, 'kategori_id');
    }

    public function scopePemasukan(Builder $query): Builder
    {
        return $query->where('jenis', 'pemasukan');
    }

    public function scopePengeluaran(Builder $query): Builder
    {
        return $query->where('jenis', 'pengeluaran');
    }

    public function scopeAktif(Builder $query): Builder
    {
        return $query->where('is_aktif', true);
    }
}
