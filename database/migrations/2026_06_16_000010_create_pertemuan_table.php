<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pertemuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jadwal_id')->nullable()->constrained('jadwal')->nullOnDelete();
            $table->foreignId('program_id')->constrained('program')->cascadeOnDelete();
            $table->foreignId('kelas_id')->constrained('kelas')->cascadeOnDelete();
            $table->foreignId('pengajar_id')->constrained('pengajar')->cascadeOnDelete();
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_selesai')->nullable();
            $table->enum('status', ['berlangsung', 'selesai', 'batal'])->default('berlangsung');
            $table->text('materi')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pertemuan');
    }
};
