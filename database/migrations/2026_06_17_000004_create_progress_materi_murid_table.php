<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('progress_materi_murid', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materi_id')->constrained('materi')->cascadeOnDelete();
            $table->foreignId('murid_id')->constrained('murid')->cascadeOnDelete();
            $table->foreignId('pertemuan_id')->nullable()->constrained('pertemuan')->nullOnDelete();
            $table->enum('status', ['belum', 'sedang', 'selesai'])->default('belum');
            $table->date('tanggal_selesai')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->unique(['materi_id', 'murid_id']);
            $table->index(['murid_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('progress_materi_murid');
    }
};
