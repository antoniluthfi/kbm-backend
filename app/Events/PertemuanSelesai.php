<?php

namespace App\Events;

use App\Models\Pertemuan;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PertemuanSelesai
{
    use Dispatchable, SerializesModels;

    public function __construct(public readonly Pertemuan $pertemuan) {}
}
