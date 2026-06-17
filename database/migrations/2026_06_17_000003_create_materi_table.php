<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kurikulum_id')->constrained('kurikulum')->cascadeOnDelete();
            $table->foreignId('bab_kurikulum_id')->constrained('bab_kurikulum')->cascadeOnDelete();
            $table->string('sub_bab', 150)->nullable();
            $table->string('judul', 200);
            $table->text('kompetensi')->nullable();
            $table->string('metode', 100)->nullable();
            $table->enum('tipe', ['umum', 'individu'])->default('umum');
            $table->enum('target_bulan', [
                'januari', 'februari', 'maret', 'april', 'mei', 'juni',
                'juli', 'agustus', 'september', 'oktober', 'november', 'desember',
            ])->nullable();
            $table->string('file_url')->nullable();
            $table->unsignedInteger('urutan')->default(0);
            $table->timestamps();

            $table->index(['kurikulum_id', 'tipe']);
            $table->index('target_bulan');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};
