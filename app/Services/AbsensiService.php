<?php

namespace App\Services;

use App\Events\PertemuanSelesai;
use App\Models\AbsensiMurid;
use App\Models\AbsensiPengajar;
use App\Models\MuridKelas;
use App\Models\Pertemuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class AbsensiService
{
    public function bukaSesi(array $data): Pertemuan
    {
        if (!empty($data['jadwal_id'])) {
            $sudahAda = Pertemuan::where('jadwal_id', $data['jadwal_id'])
                ->where('tanggal', $data['tanggal'])
                ->whereIn('status', ['berlangsung', 'selesai'])
                ->exists();

            if ($sudahAda) {
                throw ValidationException::withMessages([
                    'jadwal_id' => 'Jadwal ini sudah memiliki sesi pada tanggal tersebut.',
                ]);
            }
        }

        return DB::transaction(function () use ($data) {
            $pertemuan = Pertemuan::create($data);

            // Buat draft absensi untuk semua murid aktif di kelas ini (default alpha)
            $muridIds = MuridKelas::where('kelas_id', $data['kelas_id'])
                ->where('status', 'aktif')
                ->whereNull('tanggal_keluar')
                ->pluck('murid_id');

            $now = now();
            $drafts = $muridIds->map(fn ($muridId) => [
                'pertemuan_id' => $pertemuan->id,
                'murid_id'     => $muridId,
                'status'       => 'alpha',
                'dicatat_oleh' => $data['pengajar_id'] ?? null,
                'created_at'   => $now,
                'updated_at'   => $now,
            ])->values()->all();

            if (!empty($drafts)) {
                AbsensiMurid::insert($drafts);
            }

            // Buat absensi pengajar default hadir
            AbsensiPengajar::create([
                'pertemuan_id' => $pertemuan->id,
                'pengajar_id'  => $data['pengajar_id'],
                'status'       => 'hadir',
            ]);

            return $pertemuan->load(['kelas', 'program', 'pengajar.user', 'absensiMurid.murid', 'absensiPengajar']);
        });
    }

    public function inputAbsensiBulk(Pertemuan $pertemuan, array $absensiData, int $pencatatId): void
    {
        if ($pertemuan->status !== 'berlangsung') {
            throw ValidationException::withMessages([
                'status' => 'Absensi hanya bisa diisi pada sesi yang sedang berlangsung.',
            ]);
        }

        $now = now();
        $upsertData = collect($absensiData)->map(fn ($item) => [
            'pertemuan_id' => $pertemuan->id,
            'murid_id'     => $item['murid_id'],
            'status'       => $item['status'],
            'catatan'      => $item['keterangan'] ?? null,
            'dicatat_oleh' => $pencatatId,
            'created_at'   => $now,
            'updated_at'   => $now,
        ])->all();

        AbsensiMurid::upsert(
            $upsertData,
            ['pertemuan_id', 'murid_id'],
            ['status', 'catatan', 'dicatat_oleh', 'updated_at']
        );
    }

    public function tutupSesi(Pertemuan $pertemuan): Pertemuan
    {
        if ($pertemuan->status !== 'berlangsung') {
            throw ValidationException::withMessages([
                'status' => 'Sesi ini tidak sedang berlangsung.',
            ]);
        }

        // Validasi semua murid sudah punya absensi
        $totalMurid = MuridKelas::where('kelas_id', $pertemuan->kelas_id)
            ->where('status', 'aktif')
            ->whereNull('tanggal_keluar')
            ->count();

        $totalAbsensi = $pertemuan->absensiMurid()->count();

        if ($totalMurid !== $totalAbsensi) {
            throw ValidationException::withMessages([
                'absensi' => 'Semua murid harus sudah memiliki status absensi sebelum sesi ditutup.',
            ]);
        }

        $pertemuan->update([
            'status'      => 'selesai',
            'jam_selesai' => now()->format('H:i'),
        ]);

        event(new PertemuanSelesai($pertemuan));

        return $pertemuan->fresh(['kelas', 'program', 'pengajar.user', 'absensiMurid.murid', 'absensiPengajar']);
    }

    public function hitungPersentaseKehadiran(int $muridId, int $bulan, int $tahun): float
    {
        $pertemuanIds = Pertemuan::selesai()
            ->whereHas('absensiMurid', fn ($q) => $q->where('murid_id', $muridId))
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->pluck('id');

        $total = $pertemuanIds->count();
        if ($total === 0) {
            return 0.0;
        }

        $hadir = AbsensiMurid::whereIn('pertemuan_id', $pertemuanIds)
            ->where('murid_id', $muridId)
            ->whereIn('status', ['hadir', 'terlambat'])
            ->count();

        return round(($hadir / $total) * 100, 1);
    }
}
