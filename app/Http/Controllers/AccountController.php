<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AccountController extends Controller
{
   public function masuk () {
       return view('/create_account.signin');
   }

   public function daftar () {
       return view('/create_account.signup');
   }

   public function category () {
       return view('/homepage.kategori');
   }

   public function homepage () {
       return view('/homepage.index');
   }

   public function caripekerjaan () {
       return view('/homepage.pekerjaan');
   }
   
}
