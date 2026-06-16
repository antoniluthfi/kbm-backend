<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('absensi_murid', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pertemuan_id')->constrained('pertemuan')->cascadeOnDelete();
            $table->foreignId('murid_id')->constrained('murid')->cascadeOnDelete();
            $table->enum('status', ['hadir', 'izin', 'sakit', 'alpha', 'terlambat'])->default('alpha');
            $table->foreignId('dicatat_oleh')->nullable()->constrained('users')->nullOnDelete();
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->unique(['pertemuan_id', 'murid_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('absensi_murid');
    }
};
