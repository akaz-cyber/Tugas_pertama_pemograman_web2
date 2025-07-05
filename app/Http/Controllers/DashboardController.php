<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use App\Models\User;
use App\Models\Wisata;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function homedashboard(){
        $jumlahUserKomentar = Komentar::distinct('user_id')->count('user_id');
        return view('admin.dashboardadmin', compact('jumlahUserKomentar'));
    }

    public function exportKomentar()
    {
        $dataKomentar = DB::table('komentars')
            ->join('users', 'komentars.user_id', '=', 'users.id')
            ->join('wisatas', 'komentars.wisata_id', '=', 'wisatas.id')
            ->select('users.name as user', 'wisatas.judul as wisata', DB::raw('COUNT(komentars.id) as jumlah'))
            ->groupBy('users.name', 'wisatas.judul')
            ->get();

        $pdf = PDF::loadView('exports.komentar', compact('dataKomentar'));
        return $pdf->download('laporan-komentar.pdf');
    }
}
