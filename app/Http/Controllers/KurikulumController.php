<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kurikulum\DuplikatKurikulumRequest;
use App\Http\Requests\Kurikulum\StoreKurikulumRequest;
use App\Http\Requests\Kurikulum\UpdateKurikulumRequest;
use App\Models\Kurikulum;
use App\Services\KurikulumService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function __construct(private KurikulumService $service) {}

    public function index(Request $request): JsonResponse
    {
        $this->authorize('viewAny', Kurikulum::class);

        $user = $request->user();

        $query = Kurikulum::with(['kelas'])
            ->withCount('materi')
            ->when($request->kelas_id, fn ($q) => $q->where('kelas_id', $request->kelas_id))
            ->when($request->tahun_ajaran, fn ($q) => $q->where('tahun_ajaran', $request->tahun_ajaran));

        if ($user->role->value === 'pengajar') {
            $query->whereHas('kelas.kelasGuru', fn ($q) =>
                $q->whereHas('pengajar', fn ($p) => $p->where('user_id', $user->id))
            );
        }

        return response()->json(['data' => $query->orderBy('tahun_ajaran', 'desc')->orderBy('nama')->get()]);
    }

    public function store(StoreKurikulumRequest $request): JsonResponse
    {
        $kurikulum = Kurikulum::create($request->validated());
        return response()->json(['kurikulum' => $kurikulum->load('kelas')], 201);
    }

    public function show(Kurikulum $kurikulum): JsonResponse
    {
        $this->authorize('view', $kurikulum);

        $kurikulum->load([
            'kelas',
            'bab.materi',
        ]);

        return response()->json(['kurikulum' => $kurikulum]);
    }

    public function update(UpdateKurikulumRequest $request, Kurikulum $kurikulum): JsonResponse
    {
        $this->authorize('update', $kurikulum);

        $kurikulum->update($request->validated());
        return response()->json(['kurikulum' => $kurikulum->load('kelas')]);
    }

    public function destroy(Kurikulum $kurikulum): JsonResponse
    {
        $this->authorize('delete', $kurikulum);

        $kurikulum->delete();
        return response()->json(null, 204);
    }

    public function duplikat(DuplikatKurikulumRequest $request, Kurikulum $kurikulum): JsonResponse
    {
        $this->authorize('create', Kurikulum::class);

        $baru = $this->service->duplikat($kurikulum, $request->validated('tahun_ajaran'));
        return response()->json(['kurikulum' => $baru->load('kelas')], 201);
    }
}
