<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
    {

        $today = Carbon::today();

        return view('dashboard', [
            "title" => "Dasboard",
            'jumlahPendaftar' => Pendaftar::count(),
            'jumlahDiterima' => Pendaftar::where('isAccepted', true)->count(),
            'pendaftarHariIni' => Pendaftar::whereDate('created_at', $today)->count(),
            'pendaftarDiterimaHariIni' => Pendaftar::whereDate('accepted_at', $today)->count(),

        ]);
    }
}
