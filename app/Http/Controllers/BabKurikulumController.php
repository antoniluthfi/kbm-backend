<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kurikulum\ReorderRequest;
use App\Http\Requests\Kurikulum\StoreBabRequest;
use App\Http\Requests\Kurikulum\UpdateBabRequest;
use App\Models\BabKurikulum;
use App\Models\Kurikulum;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class BabKurikulumController extends Controller
{
    public function index(Kurikulum $kurikulum): JsonResponse
    {
        $this->authorize('view', $kurikulum);

        return response()->json([
            'data' => $kurikulum->bab()->with('materi')->get(),
        ]);
    }

    public function store(StoreBabRequest $request, Kurikulum $kurikulum): JsonResponse
    {
        $this->authorize('manageBab', $kurikulum);

        $data = $request->validated();

        if (!isset($data['urutan'])) {
            $data['urutan'] = $kurikulum->bab()->max('urutan') + 1;
        }

        $bab = $kurikulum->bab()->create($data);
        return response()->json(['bab' => $bab], 201);
    }

    public function update(UpdateBabRequest $request, BabKurikulum $babKurikulum): JsonResponse
    {
        $this->authorize('manageBab', $babKurikulum->kurikulum);

        $babKurikulum->update($request->validated());
        return response()->json(['bab' => $babKurikulum]);
    }

    public function destroy(BabKurikulum $babKurikulum): JsonResponse
    {
        $this->authorize('manageBab', $babKurikulum->kurikulum);

        $babKurikulum->delete();
        return response()->json(null, 204);
    }

    public function reorder(ReorderRequest $request, Kurikulum $kurikulum): JsonResponse
    {
        $this->authorize('manageBab', $kurikulum);

        DB::transaction(function () use ($request) {
            foreach ($request->validated('items') as $item) {
                BabKurikulum::where('id', $item['id'])->update(['urutan' => $item['urutan']]);
            }
        });

        return response()->json(['data' => $kurikulum->bab()->get()]);
    }
}
