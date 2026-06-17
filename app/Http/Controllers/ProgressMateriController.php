<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kurikulum\ProgressBulkRequest;
use App\Http\Requests\Kurikulum\UpdateProgressRequest;
use App\Models\Kurikulum;
use App\Models\Murid;
use App\Models\MuridKelas;
use App\Models\ProgressMateriMurid;
use App\Services\KurikulumService;
use Illuminate\Http\JsonResponse;

class ProgressMateriController extends Controller
{
    public function __construct(private KurikulumService $service) {}

    public function progressKelas(Kurikulum $kurikulum): JsonResponse
    {
        $this->authorize('view', $kurikulum);

        $muridIds = MuridKelas::where('kelas_id', $kurikulum->kelas_id)
            ->where('status', 'aktif')
            ->whereNull('tanggal_keluar')
            ->pluck('murid_id');

        $murid = Murid::whereIn('id', $muridIds)->orderBy('nama')->get(['id', 'nama', 'jenis_kelamin']);

        $materi = $kurikulum->materi()->with('bab:id,kode,nama')->get();

        $progress = ProgressMateriMurid::whereIn('murid_id', $muridIds)
            ->whereIn('materi_id', $materi->pluck('id'))
            ->get(['id', 'materi_id', 'murid_id', 'status', 'catatan', 'pertemuan_id', 'tanggal_selesai']);

        return response()->json([
            'murid'   => $murid,
            'materi'  => [
                'umum'     => $materi->where('tipe', 'umum')->values(),
                'individu' => $materi->where('tipe', 'individu')->values(),
            ],
            'progress' => $progress,
        ]);
    }

    public function progressMurid(Kurikulum $kurikulum, Murid $murid): JsonResponse
    {
        $this->authorize('manageProgress', $kurikulum);

        $materi = $kurikulum->materi()->with('bab:id,kode,nama')->get();

        $progress = ProgressMateriMurid::where('murid_id', $murid->id)
            ->whereIn('materi_id', $materi->pluck('id'))
            ->get(['id', 'materi_id', 'status', 'catatan', 'pertemuan_id', 'tanggal_selesai']);

        return response()->json([
            'murid'    => $murid,
            'materi'   => $materi,
            'progress' => $progress,
        ]);
    }

    public function update(UpdateProgressRequest $request, ProgressMateriMurid $progressMateri): JsonResponse
    {
        $this->authorize('manageProgress', $progressMateri->materi->kurikulum);

        $data = $request->validated();
        if ($data['status'] === 'selesai' && !$progressMateri->tanggal_selesai) {
            $data['tanggal_selesai'] = now()->toDateString();
        }

        $progressMateri->update($data);
        return response()->json(['progress' => $progressMateri]);
    }

    public function bulk(ProgressBulkRequest $request, Kurikulum $kurikulum): JsonResponse
    {
        $this->authorize('manageProgress', $kurikulum);

        $now = now();
        $rows = collect($request->validated('items'))->map(fn ($item) => [
            'materi_id'       => $item['materi_id'],
            'murid_id'        => $item['murid_id'],
            'pertemuan_id'    => $item['pertemuan_id'] ?? null,
            'status'          => $item['status'],
            'catatan'         => $item['catatan'] ?? null,
            'tanggal_selesai' => $item['status'] === 'selesai' ? $now->toDateString() : null,
            'created_at'      => $now,
            'updated_at'      => $now,
        ])->all();

        ProgressMateriMurid::upsert(
            $rows,
            ['materi_id', 'murid_id'],
            ['pertemuan_id', 'status', 'catatan', 'tanggal_selesai', 'updated_at']
        );

        return response()->json(['message' => 'Progress berhasil diperbarui.']);
    }
}
