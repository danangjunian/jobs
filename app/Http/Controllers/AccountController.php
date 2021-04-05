<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AccountController extends Controller
{


   public function akun () {
       return view('/Page.myaccount');
   }

   public function category () {
       return view('/Page.kategori');
   }

   public function homepage () {
       return view('/index');
   }

   public function caripekerjaan () {
       return view('/Page.pekerjaan');
   }

   public function newjobs () {
    return view('/Page.pekerjaan2');
}
   
}
