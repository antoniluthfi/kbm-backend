<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('absensi_pengajar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pertemuan_id')->constrained('pertemuan')->cascadeOnDelete();
            $table->foreignId('pengajar_id')->constrained('pengajar')->cascadeOnDelete();
            $table->foreignId('pengajar_pengganti_id')->nullable()->constrained('pengajar')->nullOnDelete();
            $table->enum('status', ['hadir', 'izin', 'sakit', 'pengganti'])->default('hadir');
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->unique('pertemuan_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('absensi_pengajar');
    }
};
