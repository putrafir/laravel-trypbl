<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class DiterimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($nisn)
    {
        return view('accepted.detail', [
            'title' => 'Detail',
            'pendaftar' => Pendaftar::with('parentDb', 'asalSekolah')->where('nisn', $nisn)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nisn)
    {
        return view('accepted.edit', [
            'title' => 'Edit',
            'pendaftar' => Pendaftar::with('parentDb', 'asalSekolah')->where('nisn', $nisn)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftar $pendaftar)
    {
        //
    }
}
