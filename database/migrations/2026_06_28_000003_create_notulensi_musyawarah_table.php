<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notulensi_musyawarah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musyawarah_id')->constrained('musyawarah')->cascadeOnDelete();
            $table->enum('kategori', ['usulan', 'keputusan', 'problem', 'lainnya']);
            $table->text('isi');
            $table->string('penanggung_jawab', 100)->nullable();
            $table->enum('status_tindak_lanjut', ['open', 'selesai', 'ditunda'])->default('open');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notulensi_musyawarah');
    }
};
