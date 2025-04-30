<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home() {
    $judul = [
        "Raja Ampat",
        "Labuan Bajo",
        "Bitan",

    ];

    $deskripsi = [
        "Menikmati udara segar pegunungan yang memukau.",
        "Spot liburan favorit untuk keluarga dan teman-teman.",
        "Eksplorasi alam dengan pengalaman tak terlupakan."
    ];

    return view('Home', compact('judul', 'deskripsi'));
   }
}
