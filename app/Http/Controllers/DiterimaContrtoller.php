<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class DiterimaContrtoller extends Controller
{
    public function index()
    {

        $search = request('search');
        $pendaftars = Pendaftar::where('isAccepted', true)->filter(request(['search']))->get();
        $searchMessage = null;

        if ($search && $pendaftars->isEmpty()) {
            $searchMessage = 'Pendaftar tidak ditemukan';
        }

        return view('accepted.index', [
            'title' => 'Diterima',
            'pendaftars' => $pendaftars,
            'searchMessage' => $searchMessage
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
