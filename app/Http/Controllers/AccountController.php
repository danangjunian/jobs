<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AccountController extends Controller
{



   public function category () {
       return view('/Page.kategori');
   }

   public function homepage () {
       return view('/index');
   }

   public function caripekerjaan () {
       return view('/Page.pekerjaan');
   }

   public function akun2 () {
    return view('/Page.myaccount_signup'); 
   }

   public function akun () {
    return view('/Page.myaccount_signin');
}
   
}
