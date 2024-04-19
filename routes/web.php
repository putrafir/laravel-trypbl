<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Dasboard"
    ]);
});

Route::get('/pendaftar', function () {
    return view('pendaftar', [
        "title" => "Pendaftar"
    ]);
});

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

Route::get('/detail', function () {
    return view(('detail'), [
        'title' => 'Detail'
    ]);
});
