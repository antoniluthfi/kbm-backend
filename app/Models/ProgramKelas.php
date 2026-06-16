<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramKelas extends Model
{
    public $timestamps = false;

    protected $table = 'program_kelas';

    protected $fillable = ['program_id', 'kelas_id'];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
