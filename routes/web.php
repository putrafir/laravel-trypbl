<?php

use App\Http\Controllers\AddPendaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiterimaController;
use App\Http\Controllers\DiterimaContrtoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('/')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::prefix('pendaftars')->group(function () {
    Route::post('pendaftar/accept', [PendaftarController::class, 'accept'])->name('pendaftar.accept');
    Route::resource('pendaftar', PendaftarController::class)->middleware('auth');
    // tidak dibutuhkan lagi karena menggunakan resource controller
    // Route::get('/pendaftar', [PendaftarController::class, 'index'])->name('pendaftar')->middleware('auth');
    // Route::get('/pendaftars/{pendaftar:nisn}', [PendaftarController::class, 'show'])->name('detailPendaftar');
});


Route::prefix('accepted')->group(function () {
    Route::get('/dress', function () {
        return view('accepted.dress', [
            'title' => 'Ukuran Baju'
        ]);
    })->name('dress');
    // Route::get('/accepted/{accept:nisn}', [DiterimaContrtoller::class, 'show'])->name('detailAccepted');

    Route::resource('diterima', DiterimaController::class)->middleware('auth');
    // Route::get('/diterima/{nisn}/edits', [DiterimaController::class, 'edits'])->name('diterima.edits');
    // Route::put('/diterima/{nisn}/ubah', [DiterimaController::class, 'ubah'])->name('diterima.ubah');
});


Route::resource('/addPendaftar', AddPendaftarController::class)->middleware('auth');
