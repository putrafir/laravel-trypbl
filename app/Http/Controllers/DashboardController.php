<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
    {

        // ambil data 6 minggu terakhir
        $weeks = [];

        for ($i = 0; $i < 6; $i++) {
            $weeks[] = Carbon::now()->subWeeks($i)->startOfWeek()->format('Y-m-d');
        }

        $weeks = array_reverse($weeks);

        // hitung jumlah pendaftar per minggu
        $dataPerWeek = [];
        $previousTotal = 0;
        $changePercentage = 0;

        foreach ($weeks as $week) {
            $startOfWeek = Carbon::parse($week)->startOfWeek();
            $endOfWeek = Carbon::parse($week)->endOfWeek();

            $alumniPerWeek = Pendaftar::whereHas('asalSekolah', function ($query) {
                $query->where('asalSMP', 'MTS Miftahul Ulum');
            })->whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();

            $nonAlumniPerWeek = Pendaftar::whereHas('asalSekolah', function ($query) {
                $query->where('asalSMP', '!=', 'MTS Miftahul Ulum');
            })->whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();

            $totalThisWeek = $alumniPerWeek + $nonAlumniPerWeek;

            if ($previousTotal > 0) {
                $changePercentage = (($totalThisWeek - $previousTotal) / $previousTotal) * 100;
            }

            $dataPerWeek[] = [
                'week' => $startOfWeek->format('d M'),
                'alumniPerWeek' => $alumniPerWeek,
                'nonAlumniPerWeek' => $nonAlumniPerWeek,
                'changePercentage' => $changePercentage
            ];

            $previousTotal = $totalThisWeek;
        }

        $lastWeekChangePercentage = end($dataPerWeek)['changePercentage'];

        $alumni = Pendaftar::whereHas('asalSekolah', function ($query) {
            $query->where('asalSMP', 'MTS Miftahul Ulum');
        })->count();
        $nonAlumni = Pendaftar::whereHas('asalSekolah', function ($query) {
            $query->where('asalSMP', '!=', 'MTS Miftahul Ulum');
        })->count();

        $today = Carbon::today();



        return view('dashboard', [
            "title" => "Dasboard",
            'jumlahPendaftar' => Pendaftar::count(),
            'jumlahDiterima' => Pendaftar::where('isAccepted', true)->count(),
            'pendaftarHariIni' => Pendaftar::whereDate('created_at', $today)->count(),
            'pendaftarDiterimaHariIni' => Pendaftar::whereDate('accepted_at', $today)->count(),
            'alumniMts' => $alumni,
            'nonAlumniMts' => $nonAlumni,
            'dataPerWeek' => $dataPerWeek,
            'lastWeekChangePercentage' => $lastWeekChangePercentage

        ]);
    }
}
