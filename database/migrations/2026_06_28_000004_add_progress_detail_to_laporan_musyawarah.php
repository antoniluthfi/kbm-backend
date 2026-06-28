<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('laporan_musyawarah', function (Blueprint $table) {
            $table->decimal('snapshot_progress_umum_persen', 5, 2)->nullable()->after('snapshot_progress_persen');
            $table->decimal('snapshot_progress_individu_persen', 5, 2)->nullable()->after('snapshot_progress_umum_persen');
        });
    }

    public function down(): void
    {
        Schema::table('laporan_musyawarah', function (Blueprint $table) {
            $table->dropColumn(['snapshot_progress_umum_persen', 'snapshot_progress_individu_persen']);
        });
    }
};
