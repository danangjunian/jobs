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
// view tambah pekerjaan
Route::get('/tambah-pekerjaan', function () {
    return view('Page.tambah-pekerjaan');
});
// view tambah resume
Route::get('/tambah-resume', function () {
    return view('Page.tambah-resume');
});











Route::get('/log', [AdminController::class, 'admin']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
