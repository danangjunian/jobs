<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;























































































































// HOMEPAGE DAN PAGE
Route::get('/', [AccountController::class, 'homepage_non_user']);
Route::get('/category', [AccountController::class, 'categori_non_user']);


// MASUK DAN DAFTAR
Route::get('/masuk', [AccountController::class, 'signin_user']);
Route::post('/signin', [AccountController::class, 'signin'])->name('auth.signin');


Route::get('/daftar', [AccountController::class, 'signup_user']);
Route::post('register', [AccountController::class, 'register'])->name('auth.register');


Route::get('/jobs', [AccountController::class, 'jobs_non_user']);



//user page
Route::get('/lawang', [AccountController::class, 'homepage_user']);
Route::get('/profile-user', [AccountController::class, 'profile_user']);
Route::get('/add-jobs', [AccountController::class, 'add_jobs_user']);
Route::get('/add-resume', [AccountController::class, 'add_resume_user']);

//blog
Route::get('/blog', function () {
    return view('layout.blog.blogs');
});


//belum ada controller
Route::get('/browse-jobs', function () {
    return view('layout.page.browse-jobs');
});
Route::get('/cari-kategori', function () {
    return view('layout.page.cari-kategori');
});



//lowongan kerja
Route::get('/halaman-pekerjaan', function () {
    return view('layout.page.halaman-pekerjaan');
});
Route::get('/resume-page', function () {
    return view('layout.page.resume-page');
});

//profile account
Route::get('/profile-account', [AccountController::class, 'user_account']);


//ADMIN EDIT


//ADMIN
Route::get('/admin/lawang', [AdminController::class, 'admin']);
Route::get('/admin-data-perusahaan', [AdminController::class, 'admin_data_perusahaan']);
Route::get('/admin-data-user', [AdminController::class, 'admin_data_user']);
Route::get('/admin-resume-pelamar', [AdminController::class, 'admin_resume_pelamar']);
Route::get('/admin-resume-perusahaan', [AdminController::class, 'admin_resume_perusahaan']);
Route::get('/admin-blacklist-resume', [AdminController::class, 'admin_blacklist_resume']);
Route::get('/admin-blacklist-pengguna', [AdminController::class, 'admin_blacklist_pengguna']);
Route::get('/admin-edit', [AdminController::class, 'admin_profile_edit']);
Route::get('/profile/admin', [AdminController::class, 'profile_admin']);

//MASTER DATA
Route::get('/data/pelamar', [AdminController::class, 'data_master_p']);
Route::get('/data/perusahaan', [AdminController::class, 'data_master_u']);


//LOGIN'
Route::get('/admin/login', [AdminController::class, 'admin_login']);
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');

//LOGOUT
Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');

