<?php

namespace App\Http\Controllers;

use App\Http\Requests\Pengajar\StorePengajarRequest;
use App\Http\Requests\Pengajar\UpdatePengajarRequest;
use App\Models\Pengajar;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Pengajar::with('user')
            ->when($request->search, fn($q) => $q->whereHas('user', fn($u) => $u->where('name', 'like', "%{$request->search}%")))
            ->when($request->has('is_aktif'), fn($q) => $q->where('is_aktif', $request->boolean('is_aktif')));

        return response()->json($query->paginate(15));
    }

    public function store(StorePengajarRequest $request): JsonResponse
    {
        $pengajar = Pengajar::create($request->validated());
        return response()->json(['pengajar' => $pengajar->load('user')], 201);
    }

    public function show(Pengajar $pengajar): JsonResponse
    {
        return response()->json(['pengajar' => $pengajar->load('user')]);
    }

    public function update(UpdatePengajarRequest $request, Pengajar $pengajar): JsonResponse
    {
        $pengajar->update($request->validated());
        return response()->json(['pengajar' => $pengajar->load('user')]);
    }

    public function destroy(Pengajar $pengajar): JsonResponse
    {
        $pengajar->delete();
        return response()->json(null, 204);
    }

    public function toggleAktif(Pengajar $pengajar): JsonResponse
    {
        $pengajar->update(['is_aktif' => !$pengajar->is_aktif]);
        return response()->json(['pengajar' => $pengajar->load('user')]);
    }
}
