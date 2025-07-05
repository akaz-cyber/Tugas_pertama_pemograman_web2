<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\UserController;

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
//route homepage
Route::get('/', [HomeController::class, 'home'])->name('beranda');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('informasi', [HomeController::class, 'informasi'])->name('informasi');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('detailwisata/{id}', [HomeController::class, 'detailwisata'])->name('detail');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboardadmin', [DashboardController::class,'homedashboard'])->name('dashboard');
    Route::get('/export-komentar', [DashboardController::class, 'exportKomentar'])->name('export.komentar');

    // semua fitur CRUD wisata hanya bisa diakses admin
    Route::controller(WisataController::class)->prefix('Wisatas')->group(function () {
        Route::get('', 'index')->name('wisatas');
        Route::get('create', 'create')->name('wisatas.create');
        Route::post('store', 'store')->name('wisatas.store');
        Route::get('show/{id}', 'show')->name('wisatas.show');
        Route::get('edit/{id}', 'edit')->name('wisatas.edit');
        Route::put('edit/{id}', 'update')->name('wisatas.update');
        Route::delete('destroy/{wisata}', 'destroy')->name('wisatas.destroy');
    });
   //semua fitur crud user hanya bisa di akses oleh admin
    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('', 'index')->name('users');
        Route::get('create', 'create')->name('users.create');
        Route::post('store', 'store')->name('users.store');
        Route::get('show/{id}', 'show')->name('users.show');
        Route::get('edit/{id}', 'edit')->name('users.edit');
        Route::put('edit/{id}', 'update')->name('users.update');
        Route::delete('destroy/{user}', 'destroy')->name('users.destroy');
    });
});

Route::post('detailwisata/{id}/komentar', [HomeController::class, 'simpanKomentar'])
    ->middleware('auth')
    ->name('komentar.simpan');