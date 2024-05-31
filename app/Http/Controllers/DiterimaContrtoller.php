<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class DiterimaContrtoller extends Controller
{
    public function index()
    {
        return view('accepted.diterima', [
            'title' => 'Diterima',
            'pendaftars' => Pendaftar::where('isAccepted', true)->get()
        ]);
    }
    public function show($nisn)
    {
        $pendaftar = Pendaftar::with('parentDb', 'asalSekolah')->where('nisn', $nisn)->first();
        $title = 'Detail';
        return view('detail', compact('pendaftar', 'title'));
    }
}
