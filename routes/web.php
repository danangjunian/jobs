<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('master');
});

Route::get('/signin', function () {
    return view('create_account.signin');
});

Route::get('/signup', function () {
    return view('create_account.signup');
});

Route::get('/kategori', function () {
    return view('homepage.kategori');
});

Route::get('/mas', function () {
    return view('layout.master2');
});

Route::get('/home', function () {
    return view('homepage.index');
});