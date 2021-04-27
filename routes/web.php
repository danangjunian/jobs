<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\AddJobsController;
use Illuminate\Routing\RouteGroup;

// HOMEPAGE DAN PAGE
Route::get('/', [BlogController::class, 'homepage_non_user']);
Route::get('/category', [AccountController::class, 'categori_non_user']);


// MASUK DAN DAFTAR
Route::get('/masuk', [AccountController::class, 'signin_user']);
Route::post('/signin', [AccountController::class, 'signin'])->name('auth.signin');


Route::get('/daftar', [AccountController::class, 'signup_user']);
Route::post('register', [AccountController::class, 'register'])->name('auth.register');


Route::get('/jobs', [AccountController::class, 'jobs_non_user']);

//profile account
Route::get('/profile-account', [AccountController::class, 'user_account']);

//user page
Route::get('/lawang', [AccountController::class, 'homepage_user']);
Route::get('/profile-user', [AccountController::class, 'profile_user']);
Route::get('/add-jobs', [AccountController::class, 'add_jobs_user']);
Route::get('/add-resume', [AccountController::class, 'add_resume_user']);

//blog
// Route::get('/blog', function () {
//     return view('layout.blog.blogs');
// });


//belum ada controller
Route::get('/browse-jobs', function () {
    return view('layout.page.browse-jobs');
});
Route::get('/cari-kategori', function () {
    return view('layout.page.cari-kategori');
});

//-------------------------------------------Tampilan sebelum login-------------------------------------------------//


Route::get('/',[AwalController::class, 'index_pelamar']);
Route::get('/halaman-pekerjaan-awal/{id}',[AwalController::class, 'halaman_pekerjaan_awal']);
Route::get('/browse-jobs-awal',[AwalController::class, 'browse_jobs']);

//----------------------------------------------blog sebelum login------------------------------------------------//

Route::get('/blog-awal',[BlogsController::class, 'blog_awal']);
Route::get('/blog-post-awal',[BlogsController::class, 'blog_post']);
Route::get('/blog-inputan',[BlogsController::class, 'view']);
Route::post('/blog-post-awal',[BlogsController::class, 'input']);
Route::get('/blog-post-awal',[BlogsController::class, 'lihat']);
Route::get('/blog-detail/{id}',[BlogsController::class, 'detail']);


Route::get('/halaman-pekerjaan-awal',[AddJobsController::class, 'hal_kerja']);




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
Route::get('/post/jobs/{id}',[PelamarController::class, 'index']);



Route::get('/browse-jobs',[PelamarController::class, 'jobs']);
Route::get('/cari-kategori',[PelamarController::class, 'kategori_pelamar']);
Route::get('/add-resume', [PelamarController::class, 'add_resume_user']);
Route::get('/preview-resume', [PelamarController::class, 'lihat_resume']);
Route::get('/atur-resume', [PelamarController::class, 'edit_resume']);
Route::get('/job-alerts', [PelamarController::class, 'pemberitahuan']);

//--------------------blog sudah login-----------//

Route::post('/blog-post-awal',[PelamarController::class, 'view']);
Route::get('/blog-post', [PelamarController::class, 'berita_single']);





//-------------------------------------------------------- PERUSAHAAN --------------------------------------------------//
Route::get('/homepage_user',[PerusahaanController::class, 'index_perushaan']);
Route::get('/kelola-jobs',[PerusahaanController::class, 'kelola_kerja']);
Route::get('/tambah/pekerjaan', [PerusahaanController::class, 'view_jobs']);
Route::post('/tambah/pekerjaan', [PerusahaanController::class, 'add_jobs']);
Route::get('/resume-page', [PerusahaanController::class, 'resume']);

Route::get('/atur-aplikasi',[PerusahaanController::class, 'cv']);
Route::get('/cari-resume',[PerusahaanController::class, 'cari_cv']);
Route::get('/halaman_kerja/{id}', [PerusahaanController::class, 'hal_kerja']);


//profile account
Route::get('/profile-account', [AccountController::class, 'user_account']);


//middleware
Route::group(['middleware' => 'auth:adminlogin'], function (){

Route::get('/tambah/data', [AdminController::class, 'tambahdata']);
Route::post('/tambah/kategori', [AdminController::class, 'tambah_kategori'])->name('tambah.kategori');
Route::post('/tambah/tags', [AdminController::class, 'tambah_tags'])->name('tambah.tags');
Route::post('/tambah/tipe/pekerjaan', [AdminController::class, 'tambah_tipe_kerja'])->name('tambah.kerja');
 
//ADMIN
Route::get('/admin/lawang', [AdminController::class, 'admin'])->name('admin')->middleware('auth:adminlogin');

Route::get('/tambah/admin', [AdminController::class, 'tambahadmin']);
Route::post('/tambah/admin', [AdminController::class, 'add_admin'])->name('tambah.admin');
Route::get('/tanggal', [AdminController::class, 'lihattanggal']);
Route::get('/cetak/pertanggalan/{tglawal}/{tglakhir}', [AdminController::class, 'cetakpertanggal']);
Route::get('/page/admin/masteradmin', [AdminController::class, 'pages']);

Route::get('/admin-data-perusahaan', [AdminController::class, 'admin_data_perusahaan']);
Route::get('/admin-data-user', [AdminController::class, 'admin_data_user']);
Route::get('/admin-resume-pelamar', [AdminController::class, 'admin_resume_pelamar']);
Route::get('/admin-blacklist-resume', [AdminController::class, 'admin_blacklist_resume']);
Route::get('/admin-blacklist-pengguna', [AdminController::class, 'admin_blacklist_pengguna']);
Route::get('/admin-edit', [AdminController::class, 'admin_profile_edit']);
Route::get('/profile/admin', [AdminController::class, 'profile_admin']);

//MASTER DATA
Route::get('/data/pelamar', [AdminController::class, 'data_master_p']);
Route::get('/data/perusahaan', [AdminController::class, 'data_master_u']);
Route::get('/resume/perusahaan', [AdminController::class, 'admin_resume_perusahaan']);

//SOFT DELETE
Route::get('/hapus/data/master/perusahaan/{id}', [AdminController::class, 'delete_data_master']);
Route::get('/blacklist/resume/perusahaan/{id}', [AdminController::class, 'blacklist_resume_p']);
Route::get('/resume/restore/{id}', [AdminController::class, 'resume_restore']);
Route::get('/resume/delete/{id}', [AdminController::class, 'resume_delete']);


Route::get('/master/restore/{id}', [AdminController::class, 'master_data_restore']);
Route::get('/master/delete/{id}', [AdminController::class, 'master_data_deleted']);
Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
//LOGIN'
});

Route::get('/admin/login', [AdminController::class, 'admin_login'])->name('login');
Route::post('/login/angota/lawang', [AdminController::class, 'login'])->name('admin.login');

//LOGOUT
<<<<<<< HEAD
Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');




//COBA
=======
>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b
