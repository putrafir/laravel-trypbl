<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class DiterimaContrtoller extends Controller
{
    public function index()
    {
        return view('accepted.index', [
            'title' => 'Diterima',
            'pendaftars' => Pendaftar::where('isAccepted', true)->get()
        ]);
    }
    public function show($nisn)
    {
        return view('accepted.detail', [
            'title' => 'Detail',
            'pendaftar' => Pendaftar::with('parentDb', 'asalSekolah')->where('nisn', $nisn)->first()
        ]);
    }
}
