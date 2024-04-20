<?php

use App\Http\Controllers\PendaftarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Dasboard"
    ]);
});

Route::get('/pendaftar', [PendaftarController::class, 'index']);

Route::get('/pendaftars/{pendaftar:nisn}', [PendaftarController::class, 'show']);

Route::get('/diterima', function () {
    return view('diterima', [
        "title" => "Diterima"
    ]);
});

Route::get('/dress', function () {
    return view('dress', [
        'title' => 'Ukuran Baju'
    ]);
});

Route::get('/tambah', function () {
    return view('addPendaftar', [
        'title' => 'Tambah Pendaftar'
    ]);
});
