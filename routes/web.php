<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AktifitasController;
use App\Http\Controllers\Beritacontroller;
use App\Http\Controllers\Matericontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('admin/dashboard', function () {
    return view('admins.dashboard');
});
Route::get('admin/login', [UserController::class, 'login'])->name('login');
Route::get('pages/login', [UserController::class, 'login_user'])->name('login_user');
Route::get('pages/profil', [UserController::class, 'profil'])->name('profil');
Route::get('pages/register', [UserController::class, 'register_user'])->name('register_user');


Route::get('admin/aktifitas', [AktifitasController::class, 'aktifitas'])->name('aktifitas');
Route::get('admin/berita', [Beritacontroller::class, 'berita'])->name('berita');
Route::get('admin/materi', [Matericontroller::class, 'materi'])->name('materi');
Route::get('admin/materi/create', [Matericontroller::class, 'create'])->name('create');



