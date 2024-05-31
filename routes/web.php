<?php

use App\Http\Controllers\AddPendaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiterimaContrtoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('/')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/pendaftar', [PendaftarController::class, 'index'])->name('pendaftar')->middleware('auth');

Route::post('/pendaftar', [PendaftarController::class, 'accept']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/pendaftars/{pendaftar:nisn}', [PendaftarController::class, 'show']);

Route::prefix('accepted')->group(function () {
    Route::get(
        'diterima',
        [DiterimaContrtoller::class, 'index']
    )->name('diterima');
    Route::get('/dress', function () {
        return view('accepted.dress', [
            'title' => 'Ukuran Baju'
        ]);
    })->name('dress');
});


Route::resource('/addPendaftar', AddPendaftarController::class)->middleware('auth');
