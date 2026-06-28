<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('musyawarah', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->tinyInteger('bulan')->unsigned();
            $table->smallInteger('tahun')->unsigned();
            $table->enum('status', ['draft', 'selesai'])->default('draft');
            $table->text('catatan_umum')->nullable();
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['bulan', 'tahun']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('musyawarah');
    }
};
