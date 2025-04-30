<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WisataController;

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

//route dashboard
Route::middleware('auth')->group(function (){
    Route::get('dashboardadmin', [DashboardController::class,'homedashboard'])->name('dashboard');


});


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


Route::controller(WisataController::class)->prefix('Wisatas')->group(function () {
    Route::get('', 'index')->name('wisatas');
    Route::get('create', 'create')->name('wisatas.create');
    Route::post('store', 'store')->name('wisatas.store');
    Route::get('show/{id}', 'show')->name('wisatas.show');
    Route::get('edit/{id}', 'edit')->name('wisatas.edit');
    Route::put('edit/{id}', 'update')->name('wisatas.update');
    Route::delete('destroy/{id}', 'destroy')->name('wisatas.destroy');
});