<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\AddJobsController;
use App\http\Controllers\CvController;
use Illuminate\Routing\RouteGroup;

// HOMEPAGE DAN PAGE
Route::get('/', [BlogController::class, 'homepage_non_user']);
Route::get('/category', [AccountController::class, 'categori_non_user']);


//belum ada controller]
//});

//-------------------------------------------Tampilan sebelum login-------------------------------------------------//


Route::get('/',[AwalController::class, 'index_pelamar']);
Route::get('/halaman-pekerjaan-awal/{id}',[AwalController::class, 'halaman_pekerjaan_awal']);
Route::get('/browse-jobs-awal',[AwalController::class, 'browse_jobs']);

//----------------------------------------------blog sebelum login------------------------------------------------//


Route::get('/blog-inputan',[BlogsController::class, 'view']);
Route::post('/blog-post-awal',[BlogsController::class, 'masukan']);
Route::get('/blog-post-awal',[BlogsController::class, 'lihat']);
Route::get('/blog-detail/{id}',[BlogsController::class, 'detail']);


Route::get('/halaman-pekerjaan-awal',[AddJobsController::class, 'hal_kerja']);




Route::get('/cari-kerja', function () {
    return view('layout.page-awal.browse-jobs');
});

//---------------------------------- FINISH ROUTE TAMPILAN sebelum login ---------------------------------------------/


//----------------------------------  TAMPILAN Pelamar setelah login---------------------------------------------------/
Route::group(['middleware' => 'auth:pelamar'], function (){
        Route::get('/index',[PelamarController::class, 'index']);
        Route::get('/post/jobs/{id}',[PelamarController::class, 'index']);


        Route::get('/halaman-pekerjaan/{id}',[PelamarController::class, 'halaman_pekerjaan']);

        Route::get('/browse-jobs',[PelamarController::class, 'jobs']);
        Route::get('/cari-kategori',[PelamarController::class, 'kategori_pelamar']);


        Route::get('/add-cv', [PelamarController::class, 'add_resume_user']);
        Route::post('/preview-resume', [CvController::class, 'inicv']);
        Route::get('/preview-resume', [CvController::class, 'view_cv']);
        
        
        
        
        Route::get('/preview-resume', [PelamarController::class, 'lihat_resume']);
        Route::get('/atur-resume', [PelamarController::class, 'edit_resume']);
        Route::get('/job-alerts', [PelamarController::class, 'pemberitahuan']);


});



Route::group(['middleware' => 'auth:perusahaan'], function (){
//-------------------------------------------------------- PERUSAHAAN --------------------------------------------------//
Route::get('/lawang',[PerusahaanController::class, 'index_perushaan']);
Route::get('/kelola-jobs',[PerusahaanController::class, 'kelola_kerja']);
Route::get('/tambah/pekerjaan', [PerusahaanController::class, 'view_jobs']);
Route::post('/tambah/pekerjaan', [PerusahaanController::class, 'add_jobs']);
Route::get('/resume-page', [PerusahaanController::class, 'resume']);

Route::get('/atur-aplikasi',[PerusahaanController::class, 'cv']);
Route::get('/cari-resume',[PerusahaanController::class, 'cari_cv']);
Route::get('/halaman_kerja/{id}', [PerusahaanController::class, 'hal_kerja']);

Route::get('/jobs', [AccountController::class, 'jobs_non_user']);

//profile account
Route::get('/profile-account', [AccountController::class, 'user_account']);

//user page
Route::get('/profile-user', [AccountController::class, 'profile_user']);
Route::get('/add-jobs', [AccountController::class, 'add_jobs_user']);
Route::get('/add-resume', [AccountController::class, 'add_resume_user']);

});


//profile account
Route::get('/profile-account', [AccountController::class, 'user_account']);


// MASUK DAN DAFTAR
Route::get('/masuk', [AccountController::class, 'signin_user'])->name('login');
Route::post('/masuk/pelamar', [AccountController::class, 'masuk_u'])->name('masuk_u');
Route::post('/masuk/perusahaan', [AccountController::class, 'masuk_p'])->name('masuk_p');
Route::get('/daftar', [AccountController::class, 'signup_user']);
Route::post('/register/pelamar', [AccountController::class, 'register_U'])->name('auth.pelamar');
Route::post('/register/perusahaan', [AccountController::class, 'register_P'])->name('auth.perusahaan');



//middleware
 Route::group(['middleware' => 'auth:pelamar'], function (){
Route::get('logout/perusahaan', [AccountController::class, 'logoutP'])->name('logout_p');
Route::get('logout/pelamar', [AccountController::class, 'logoutU'])->name('logout_u');
 });

