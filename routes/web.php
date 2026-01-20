<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
});

// LOGIN
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
// ================== PASIEN ==================
Route::middleware('auth')->group(function () {

    // Dashboard pasien
    Route::get('/dashboard', fn() => view('dashboard.pasien'))
        ->name('dashboard.pasien');

    // Data pasien (rekam medis)
    Route::get('/pasien/data', [PasienController::class, 'create']);
    Route::post('/pasien/data', [PasienController::class, 'store']);

    // ================== PENDAFTARAN ==================
    Route::get('/pendaftaran/step-1', [PendaftaranController::class, 'step1']);
    Route::post('/pendaftaran/step-1', [PendaftaranController::class, 'storeStep1']);

    Route::get('/pendaftaran/step-2', [PendaftaranController::class, 'step2']);
    Route::post('/pendaftaran/step-2', [PendaftaranController::class, 'storeStep2']);

    Route::get('/pendaftaran/step-3', [PendaftaranController::class, 'step3']);
    Route::post('/pendaftaran/step-3', [PendaftaranController::class, 'storeStep3']);

    Route::get('/pendaftaran/step-4', [PendaftaranController::class, 'step4']);
    Route::post('/pendaftaran/step-4', [PendaftaranController::class, 'storeStep4']);

    Route::get('/pendaftaran/bukti', [PendaftaranController::class, 'konfirmasi']);
});
