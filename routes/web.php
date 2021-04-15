<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PerusahaanController;



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
// Route::get('/homepage', [AccountController::class, 'homepage_non_user']);
// Route::get('/category', [AccountController::class, 'categori_non_user']);
// Route::get('/masuk', [AccountController::class, 'signin_non_user']);
// Route::get('/daftar', [AccountController::class, 'signup_non_user']);
// Route::get('/jobs', [AccountController::class, 'jobs_non_user']);

//user page
// Route::get('/lawang', [AccountController::class, 'homepage_user']);
// Route::get('/profile-user', [AccountController::class, 'profile_user']);

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



//-------------------------------------------Tampilan sebelum login-------------------------------------------------//


Route::get('/',[AwalController::class, 'index_pelamar']);
Route::get('/halaman-pekerjaan-awal',[AwalController::class, 'halaman_pekerjaan_awal']);
Route::get('/browse-jobs-awal',[AwalController::class, 'browse_jobs']);

//----------------------------------------------blog sebelum login------------------------------------------------//

Route::get('/blog-awal',[BlogController::class, 'blog_awal']);
Route::get('/blog-post-awal',[BlogController::class, 'blog_post']);



Route::get('/cari-kerja', function () {
    return view('layout.page-awal.browse-jobs');
});
Route::get('/daftar-awal', function () {
    return view('layout.page-awal.daftar-awal');
});
Route::get('/login-awal', function () {
    return view('layout.page-awal.login-awal');
});
//---------------------------------- FINISH ROUTE TAMPILAN sebelum login ---------------------------------------------/


//----------------------------------  TAMPILAN Pelamar setelah login---------------------------------------------------/

Route::get('/index',[PelamarController::class, 'index']);
Route::get('/halaman-pekerjaan',[PelamarController::class, 'halaman']);
Route::get('/browse-jobs',[PelamarController::class, 'jobs']);
Route::get('/cari-kategori',[PelamarController::class, 'kategori_pelamar']);
Route::get('/add-resume', [PelamarController::class, 'add_resume_user']);
Route::get('/preview-resume', [PelamarController::class, 'lihat_resume']);
Route::get('/atur-resume', [PelamarController::class, 'edit_resume']);
Route::get('/job-alerts', [PelamarController::class, 'pemberitahuan']);

//--------------------blog sudah login-----------//

Route::get('/blog', [PelamarController::class, 'berita']);
Route::get('/blog-post', [PelamarController::class, 'berita_single']);





//-------------------------------------------------------- PERUSAHAAN --------------------------------------------------//

Route::get('/homepage_user',[PerusahaanController::class, 'index_perushaan']);
Route::get('/tambah-pekerjaan', [PerusahaanController::class, 'add_kerja']);
Route::get('/kelola-jobs',[PerusahaanController::class, 'kelola_kerja']);
Route::get('/atur-aplikasi',[PerusahaanController::class, 'cv']);
Route::get('/cari-resume',[PerusahaanController::class, 'cari_cv']);







































