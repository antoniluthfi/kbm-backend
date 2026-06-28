<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laporan_musyawarah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musyawarah_id')->constrained('musyawarah')->cascadeOnDelete();
            $table->foreignId('kelas_id')->constrained('kelas')->cascadeOnDelete();
            $table->integer('snapshot_jumlah_murid')->default(0);
            $table->decimal('snapshot_kehadiran_persen', 5, 2)->nullable();
            $table->decimal('snapshot_progress_persen', 5, 2)->nullable();
            $table->text('kendala_murid_auto')->nullable();
            $table->text('kendala_pengajar')->nullable();
            $table->text('planning')->nullable();
            $table->text('tindak_lanjut')->nullable();
            $table->timestamps();

            $table->unique(['musyawarah_id', 'kelas_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_musyawarah');
    }
};
