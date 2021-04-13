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
// Route::get('/homepage', [AccountController::class, 'homepage_non_user']);
// Route::get('/category', [AccountController::class, 'categori_non_user']);
// Route::get('/masuk', [AccountController::class, 'signin_non_user']);
// Route::get('/daftar', [AccountController::class, 'signup_non_user']);
// Route::get('/jobs', [AccountController::class, 'jobs_non_user']);

//home halaman awal
Route::get('/', function () {
    return view('layout.page-awal.index-awal');
});
Route::get('/cari-kerja', function () {
    return view('layout.page-awal.browse-jobs');
});
Route::get('/halaman-pekerjaan-awal', function () {
    return view('layout.page-awal.halaman-pekerjaan-awal');
});
Route::get('/browse-jobs-awal', function () {
    return view('layout.page-awal.browse-jobs-awal');
});
Route::get('/blog-awal', function () {
    return view('layout.page-awal.blog-awal');
});
Route::get('/blog-post-awal', function () {
    return view('layout.page-awal.blog-post-awal');
});
Route::get('/daftar-awal', function () {
    return view('layout.page-awal.daftar-awal');
});
Route::get('/login-awal', function () {
    return view('layout.page-awal.login-awal');
});


//home page
Route::get('/index', function () {
    return view('layout.page.index');
});




//user page
// Route::get('/lawang', [AccountController::class, 'homepage_user']);
Route::get('/profile-user', [AccountController::class, 'profile_user']);
Route::get('/add-resume', [AccountController::class, 'add_resume_user']);
//belum ada controller
Route::get('/preview-resume', function () {
    return view('layout.page.preview-resume');
});

Route::get('/browse-jobs', function () {
    return view('layout.page.browse-jobs');
});
Route::get('/cari-kategori', function () {
    return view('layout.page.cari-kategori');
});
Route::get('/atur-resume', function () {
    return view('layout.page.atur-resume');
});
Route::get('/job-alerts', function () {
    return view('layout.page.job-alerts');
});


//perusahaan
Route::get('/add-jobs', [AccountController::class, 'add_jobs_user']);
Route::get('/kelola-jobs', function () {
    return view('layout.page.kelola-jobs');
});

Route::get('/homepage_user', function () {
    return view('layout.page_user.homepage_user');
});




//lowongan kerja
Route::get('/halaman-pekerjaan', function () {
    return view('layout.page.halaman-pekerjaan');
});
Route::get('/resume-page', function () {
    return view('layout.page.resume-page');
});
Route::get('/contact', function () {
    return view('layout.page.contact');
});







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



//blog
Route::get('/blog', function () {
    return view('layout.blog.blogs');
});
Route::get('/blog-post', function () {
    return view('layout.blog.blog-post');
});
