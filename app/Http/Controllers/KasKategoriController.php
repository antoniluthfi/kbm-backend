<?php

namespace App\Http\Controllers;

use App\Models\KasKategori;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class KasKategoriController extends Controller
{
    public function index(): JsonResponse
    {
        $kategori = KasKategori::orderBy('jenis')->orderBy('nama')->get();
        return response()->json(['data' => $kategori]);
    }

    public function store(Request $request): JsonResponse
    {
        abort_unless($request->user()->role->value === 'super_admin', 403);

        $data = $request->validate([
            'nama'     => 'required|string|max:100',
            'jenis'    => 'required|in:pemasukan,pengeluaran',
            'is_aktif' => 'boolean',
        ]);

        $kategori = KasKategori::create($data);
        return response()->json(['kategori' => $kategori], 201);
    }

    public function update(Request $request, KasKategori $kasKategori): JsonResponse
    {
        abort_unless($request->user()->role->value === 'super_admin', 403);

        $data = $request->validate([
            'nama'     => 'sometimes|string|max:100',
            'jenis'    => 'sometimes|in:pemasukan,pengeluaran',
            'is_aktif' => 'sometimes|boolean',
        ]);

        $kasKategori->update($data);
        return response()->json(['kategori' => $kasKategori]);
    }

    public function destroy(Request $request, KasKategori $kasKategori): JsonResponse
    {
        abort_unless($request->user()->role->value === 'super_admin', 403);

        if ($kasKategori->transaksi()->exists()) {
            abort(422, 'Kategori tidak dapat dihapus karena sudah digunakan dalam transaksi.');
        }

        $kasKategori->delete();
        return response()->json(null, 204);
    }
}
