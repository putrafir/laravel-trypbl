<?php

namespace App\Http\Controllers;


use App\Models\Pendaftar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function update(Request $request,  $nisn)
    {
        $pendaftar = Pendaftar::where('nisn', $nisn)->firstOrFail();


        // dd('ini request ' . $request->nisn . ' ini pendaftar ' . $pendaftar->nisn);

        $rules = [
            'namaLengkap' => 'required',
            'jenisKelamin' => 'required',
            'tanggalLahir' => 'required|date|before:today',
            'alamat' => 'required',
            'email' => 'required|email:dns',
            'kota' => 'required',
            'tempatLahir' => 'required',
            'agama' => 'required',
            'provinsi' => 'required',
            'telepon' => 'required',
        ];

        if ($request->nisn != $pendaftar->nisn) {
            $rules['nisn'] = 'required|digits:10|unique:pendaftars,nisn';
        } else {
            $rules['nisn'] = 'required|digits:10';
        }

        $validatedPendaftar = $request->validate($rules);


        $validatedOrangTua = $request->validate([
            'namaAyah' => 'required',
            'nikAyah' => 'required',
            'pekerjaanAyah' => 'required',
            'teleponAyah' => 'required',
            'alamatAyah' => 'required',
            'usiaAyah' => 'required',
            'namaIbu' => 'required',
            'nikIbu' => 'required',
            'pekerjaanIbu' => 'required',
            'teleponIbu' => 'required',
            'alamatIbu' => 'required',
            'usiaIbu' => 'required'
        ]);

        $validatedAsalSekolah = $request->validate(
            [
                'provinsiSMP' => 'required',
                'kotaSMP' => 'required',
                'asalSMP' => 'required',
                'alamatSMP' => 'required'

            ]
        );
        $tanggalLahir = Carbon::createFromFormat('d/m/Y', $validatedPendaftar['tanggalLahir'])->format('Y/m/d');
        $validatedPendaftar['tanggalLahir'] = $tanggalLahir;

        DB::transaction(function () use ($pendaftar, $validatedPendaftar, $validatedOrangTua, $validatedAsalSekolah) {
            $pendaftar->asalSekolah()->update($validatedAsalSekolah);

            $pendaftar->parentDb()->update($validatedOrangTua);

            $pendaftar->update($validatedPendaftar);
        });

        return redirect()->route('diterima.show', $pendaftar->nisn)->with('succes', $pendaftar->nisn . ' Berhasil di update');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftar $pendaftar)
    {
        //
    }

    public function edits($nisn)
    {
        return view('accepted.edit', [
            'title' => 'Edit',
            'pendaftar' => Pendaftar::with('parentDb', 'asalSekolah')->where('nisn', $nisn)->first()
        ]);
    }


    public function ubah(Request $request, $nisn)
    {
        $pendaftar = Pendaftar::where('nisn', $nisn)->firstOrFail();
        // dd($pendaftar);
        dd('ini request ' . $request->nisn . ' ini pendaftar ' . $pendaftar->nisn);

        $rules = [
            'namaLengkap' => 'required',
            'jenisKelamin' => 'required',
            'tanggalLahir' => 'required|date|before:today',
            'alamat' => 'required',
            'email' => 'required|email:dns',
            'kota' => 'required',
            'tempatLahir' => 'required',
            'agama' => 'required',
            'provinsi' => 'required',
            'telepon' => 'required',
        ];

        if ($request->nisn != $pendaftar->nisn) {
            $rules['nisn'] = 'required|digits:10|unique:pendaftars,nisn';
        } else {
            $rules['nisn'] = 'required|digits:10';
        }

        // dd($pendaftar->namaLengkap);
        // dd('ini request ' . $request->nisn . ' ini pendaftar ' . $pendaftar->nisn);

        $validatedPendaftar = $request->validate($rules);


        $validatedOrangTua = $request->validate([
            'namaAyah' => 'required',
            'nikAyah' => 'required',
            'pekerjaanAyah' => 'required',
            'teleponAyah' => 'required',
            'alamatAyah' => 'required',
            'usiaAyah' => 'required',
            'namaIbu' => 'required',
            'nikIbu' => 'required',
            'pekerjaanIbu' => 'required',
            'teleponIbu' => 'required',
            'alamatIbu' => 'required',
            'usiaIbu' => 'required'
        ]);

        $validatedAsalSekolah = $request->validate(
            [
                'provinsiSMP' => 'required',
                'kotaSMP' => 'required',
                'asalSMP' => 'required',
                'alamatSMP' => 'required'

            ]
        );
        DB::transaction(function () use ($pendaftar, $validatedPendaftar, $validatedOrangTua, $validatedAsalSekolah) {
            $pendaftar->asalSekolah()->update($validatedAsalSekolah);

            $pendaftar->parentDb()->update($validatedOrangTua);

            $pendaftar->update($validatedPendaftar);
        });

        redirect()->route('diterima.show')->with('succes', $pendaftar->nisn . ' Berhasil di update');
    }
}
