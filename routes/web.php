<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;


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


Route::get('/daftar', [AccountController::class, 'akun']);
Route::get('/kategori', [AccountController::class, 'category']);
Route::get('/', [AccountController::class, 'homepage']);
Route::get('/kerjaan', [AccountController::class, 'caripekerjaan']);
Route::get('/jobs', [AccountController::class, 'kerja']);

