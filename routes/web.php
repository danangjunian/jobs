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


//homepage_Non Account
Route::get('/', [AccountController::class, 'homepage_non_user']);
Route::get('/category', [AccountController::class, 'categori_non_user']);
Route::get('/masuk', [AccountController::class, 'signin_non_user']);
Route::get('/daftar', [AccountController::class, 'signup_non_user']);
Route::get('/jobs', [AccountController::class, 'jobs_non_user']);



//user page
Route::get('/lawang', [AccountController::class, 'homepage_user']);
Route::get('/profile-user', [AccountController::class, 'profile_user']);
Route::get('/add-jobs', [AccountController::class, 'add_jobs_user']);
Route::get('/add-resume', [AccountController::class, 'add_resume_user']);




//profile account
Route::get('/profile-account', [AccountController::class, 'user_account']);



//Admin account
Route::get('/admin-lawang', [AdminController::class, 'admin']);
Route::get('/admin-data-perusahaan', [AdminController::class, 'admin_data_perusahaan']);
Route::get('/admin-data-user', [AdminController::class, 'admin_data_user']);
Route::get('/admin-resume-pelamar', [AdminController::class, ' admin_resume_pelamar']);
Route::get('/admin-resume-perusahaan', [AdminController::class, 'admin_resume_perusahaan']);
Route::get('/admin-blacklist-resume', [AdminController::class, 'admin_blacklist_resume']);
Route::get('/admin-blacklist-pengguna', [AdminController::class, 'admin_blacklist_pengguna']);
Route::get('/admin-edit', [AdminController::class, 'admin_edit']);
Route::get('/profile-admin', [AdminController::class, 'profile_admin']);


