<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| WELCOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| AUTH PASIEN
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginProcess']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerProcess']);

Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| PASIEN
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [PasienController::class, 'dashboard']);
Route::get('/data-pasien', [PasienController::class, 'formData']);
Route::post('/data-pasien', [PasienController::class, 'simpanData']);

/*
|--------------------------------------------------------------------------
| PENDAFTARAN RAWAT JALAN
|--------------------------------------------------------------------------
*/
Route::get('/daftar/step-1', [PendaftaranController::class, 'step1']);
Route::post('/daftar/step-1', [PendaftaranController::class, 'postStep1']);

Route::get('/daftar/step-2', [PendaftaranController::class, 'step2']);
Route::post('/daftar/step-2', [PendaftaranController::class, 'postStep2']);

Route::get('/daftar/step-3', [PendaftaranController::class, 'step3']);
Route::post('/daftar/step-3', [PendaftaranController::class, 'postStep3']);

Route::get('/daftar/step-4', [PendaftaranController::class, 'step4']);
Route::post('/daftar/step-4', [PendaftaranController::class, 'simpan']);

Route::get('/daftar/bukti', [PendaftaranController::class, 'bukti']);

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'loginProcess']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/poli', [AdminController::class, 'poli']);
Route::get('/admin/dokter', [AdminController::class, 'dokter']);
Route::get('/admin/pendaftaran', [AdminController::class, 'pendaftaran']);
Route::get('/admin/laporan', [AdminController::class, 'laporan']);
