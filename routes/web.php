<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
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
});