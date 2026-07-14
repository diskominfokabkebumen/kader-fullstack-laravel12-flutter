<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PosyanduController;
use App\Http\Controllers\Api\KaderController;
use App\Http\Controllers\Api\PasienController;

// Rute API untuk Posyandu, Kader, dan Pasien
Route::apiResource('posyandu', PosyanduController::class);
Route::apiResource('kader', KaderController::class);
Route::apiResource('pasien', PasienController::class);