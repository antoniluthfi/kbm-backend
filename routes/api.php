<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WaliMuridController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'me']);
        Route::put('profile', [AuthController::class, 'updateProfile']);
        Route::put('password', [AuthController::class, 'changePassword']);
        Route::post('avatar', [AuthController::class, 'uploadAvatar']);
    });
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::put('users/{user}/toggle', [UserController::class, 'toggleActive']);

    Route::apiResource('pengajar', PengajarController::class);
    Route::put('pengajar/{pengajar}/toggle', [PengajarController::class, 'toggleAktif']);

    Route::apiResource('murid', MuridController::class);
    Route::get('murid/{murid}/wali', [WaliMuridController::class, 'index']);
    Route::post('murid/{murid}/wali', [WaliMuridController::class, 'store']);
    Route::put('wali-murid/{waliMurid}', [WaliMuridController::class, 'update']);
    Route::delete('wali-murid/{waliMurid}', [WaliMuridController::class, 'destroy']);
});
