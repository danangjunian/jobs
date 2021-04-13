<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AccountController extends Controller
{



    public function homepage_non_user()
    {
        return view('/layout.page.index');
    }

    public function categori_non_user()
    {
        return view('/layout.page.kategori');
    }

    public function signin_non_user()
    {
        return view('/layout.page.myaccount_signin');
    }

    public function signup_non_user()
    {
        return view('/layout.page.myaccount_signup');
    }

    public function jobs_non_user()
    {
        return view('/layout.page.pekerjaan');
    }

    //=============user

    public function profile_user()
    {
        return view('/layout.page_user.profile');
    }
    public function add_jobs_user()
    {
        return view('/layout.page_user.tambah-pekerjaan');
    }

    public function add_resume_user()
    {
        return view('/layout.page_user.tambah-resume');
    }

    public function homepage_user()
    {
        return view('/layout.page_user.homepage_user');
    }


    //=============profile account

    public function user_account()
    {
        return view('/layout.user_admin.profile_dashboard');
    }
}
