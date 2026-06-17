<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bab_kurikulum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kurikulum_id')->constrained('kurikulum')->cascadeOnDelete();
            $table->string('kode', 10);
            $table->string('nama', 150);
            $table->unsignedInteger('urutan')->default(0);
            $table->timestamps();

            $table->unique(['kurikulum_id', 'kode']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bab_kurikulum');
    }
};
