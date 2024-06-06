<?php

namespace App\Http\Controllers;

use App\Models\AsalSekolah;
use App\Models\Berkas;
use App\Models\ParentDb;
use App\Models\Pendaftar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddPendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('addPendaftar', [
            'title' => 'Tambah Pendaftar'
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
        $validatedPendaftar = $request->validate([
            'namaLengkap' => 'required',
            'jenisKelamin' => 'required',
            'tanggalLahir' => 'required|date|before:today',
            'alamat' => 'required',
            'email' => 'required|email:dns',
            'kota' => 'required',
            'nisn' => 'required|digits:10|unique:pendaftars,nisn',
            'tempatLahir' => 'required',
            'agama' => 'required',
            'provinsi' => 'required',
            'telepon' => 'required',
        ]);
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

        $validatedAsalSekolah = $request->validate([
            'provinsiSMP' => 'required',
            'kotaSMP' => 'required',
            'asalSMP' => 'required',
            'alamatSMP' => 'required'

        ]);

        $files = ['ijazah', 'pasFoto', 'kartuKeluarga', 'aktaKelahiran'];
        $rulesBerkas = [
            'ijazah' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'pasFoto' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'kartuKeluarga' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'aktaKelahiran' => 'required|image|mimes:jpeg,png,jpg|max:1024'
        ];
        $validatedBerkas = $request->validate($rulesBerkas);

        $paths = [];

        foreach ($files as $file) {
            if ($request->hasFile($file) && $request->file($file)->isValid()) {
                $paths[$file] = $request->file($file)->store('berkasPendaftar');
            }
        }

        $validatedBerkas = array_merge($validatedBerkas, $paths);

        $tanggalLahir = Carbon::createFromFormat('d/m/Y', $validatedPendaftar['tanggalLahir'])->format('Y/m/d');
        $validatedPendaftar['tanggalLahir'] = $tanggalLahir;



        DB::transaction(function () use ($validatedPendaftar, $validatedOrangTua, $validatedAsalSekolah, $validatedBerkas) {
            $asalSekolah = AsalSekolah::create($validatedAsalSekolah);
            $orangTua = ParentDb::create($validatedOrangTua);
            $berkas = Berkas::create($validatedBerkas);
            $pendaftar = array_merge($validatedPendaftar, [
                'parent_dbs_id' => $orangTua->id,
                'asalSekolah_id' => $asalSekolah->id,
                'berkas_id' => $berkas->id
            ]);
            Pendaftar::create($pendaftar);
        });

        return redirect('/addPendaftar')->with('succes', 'Data pendaftar berhasil ditambahkan!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
