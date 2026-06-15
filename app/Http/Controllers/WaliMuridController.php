<?php

namespace App\Http\Controllers;

use App\Http\Requests\WaliMurid\StoreWaliMuridRequest;
use App\Http\Requests\WaliMurid\UpdateWaliMuridRequest;
use App\Models\Murid;
use App\Models\WaliMurid;
use Illuminate\Http\JsonResponse;

class WaliMuridController extends Controller
{
    public function index(Murid $murid): JsonResponse
    {
        return response()->json(['wali' => $murid->waliMurid]);
    }

    public function store(StoreWaliMuridRequest $request, Murid $murid): JsonResponse
    {
        $wali = $murid->waliMurid()->create($request->validated());
        return response()->json(['wali' => $wali], 201);
    }

    public function update(UpdateWaliMuridRequest $request, WaliMurid $waliMurid): JsonResponse
    {
        $waliMurid->update($request->validated());
        return response()->json(['wali' => $waliMurid]);
    }

    public function destroy(WaliMurid $waliMurid): JsonResponse
    {
        $waliMurid->delete();
        return response()->json(null, 204);
    }
}
