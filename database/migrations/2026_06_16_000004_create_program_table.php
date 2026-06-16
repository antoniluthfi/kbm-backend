<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->enum('jenis', [
                'pengajian_rutin',
                'persinas_asad',
                'keakraban',
                'kemandirian',
                'tahfidz',
                'amal_sholih',
            ]);
            $table->text('deskripsi')->nullable();
            $table->string('lokasi', 200)->nullable();
            $table->boolean('is_aktif')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};
