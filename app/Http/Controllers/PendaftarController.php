<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePendaftarRequest;
use App\Http\Requests\UpdatePendaftarRequest;
use App\Models\Pendaftar;
use Illuminate\Http\Request;


class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pendaftar.index', [
            "title" => "Pendaftar",
            'pendaftars' => Pendaftar::where('isAccepted', false)->latest()->filter(request(['search']))->get()

        ]);
    }
    public function show($nisn)
    {
        return view('pendaftar.detail', [
            'title' => 'Detail',
            'pendaftar' => Pendaftar::with('parentDb', 'asalSekolah')->where('nisn', $nisn)->first()
        ]);
    }

    public function accept(Request $request)
    {
        $ids = $request->input('ids');

        $pendaftars = Pendaftar::whereIn('id', $ids)->get();

        Pendaftar::whereIn('id', $ids)->update(['isAccepted' => true]);

        $acceptedNames = $pendaftars->pluck('namaLengkap')->toArray();
        $message = implode(', ', $acceptedNames) . ' telah diterima';

        return redirect()->route('pendaftar')->with('succes', $message);
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
    public function store(StorePendaftarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePendaftarRequest $request, Pendaftar $pendaftar)
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
