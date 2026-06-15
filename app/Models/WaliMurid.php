<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WaliMurid extends Model
{
    protected $table = 'wali_murid';

    protected $fillable = [
        'user_id',
        'murid_id',
        'nama',
        'hubungan',
        'phone',
        'pekerjaan',
        'is_primary',
    ];

    protected function casts(): array
    {
        return [
            'is_primary' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function murid(): BelongsTo
    {
        return $this->belongsTo(Murid::class);
    }
}
