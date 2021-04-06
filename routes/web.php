<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;


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


Route::get('/masuk', [AccountController::class, 'akun']);
Route::get('/kategori', [AccountController::class, 'category']);
Route::get('/', [AccountController::class, 'homepage']);
Route::get('/kerjaan', [AccountController::class, 'caripekerjaan']);
Route::get('/daftar', [AccountController::class, 'akun2']);
<<<<<<< HEAD
// view tambah pekerjaan
Route::get('/tambah-pekerjaan', function () {
    return view('Page.tambah-pekerjaan');
});
// view tambah resume
Route::get('/tambah-resume', function () {
    return view('Page.tambah-resume');
});
=======
Route::get('/profile-user', [AccountController::class, 'useradmin']);
Route::get('/profile', [AccountController::class, 'userdashboard']);


>>>>>>> 0d262490ff2a04e42c8b8269d9cb61239d410384











Route::get('/dashboard', [AdminController::class, 'dashboard']);
<<<<<<< HEAD
=======
Route::get('/data-user', [AdminController::class, 'datauser']);
Route::get('/data-perusahaan', [AdminController::class, 'dataperusahaan']);
Route::get('/resume-perusahaan', [AdminController::class, 'resumeperusahaan']);
Route::get('/resume-pelamar', [AdminController::class, 'resumepelamar']);
Route::get('/blacklist-pengguna', [AdminController::class, 'blacklistpengguna']);
Route::get('/blacklist-resume', [AdminController::class, 'blacklistresume']);
Route::get('/admin-internal', [AdminController::class, 'admininternal']);
Route::get('/a', [AdminController::class, 'admin']);
Route::get('/admin-edit', [AdminController::class, 'adminedit']);

>>>>>>> 0d262490ff2a04e42c8b8269d9cb61239d410384
