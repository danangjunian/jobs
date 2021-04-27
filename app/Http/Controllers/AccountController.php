<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{



    // HOME PAGE 


    // PAGE KATEGORI
    public function categori_non_user()
    {
        return view('/layout.page.kategori');
    }


    //=========================================== PAGE MASUK

    public function signin_user()
    {
        return view('/layout.page.myaccount_signin');
    }

    public function signin(Request $request)
    {
        $peraturan = ([
            'email_pelamar'              => 'required|email',
            'password'                   => 'required|string'
        ]);

        $pesan = ([
            'email_pelamar.required'        => 'Email wajib diisi',
            'email_pelamar.email'           => 'Email tidak valid',
            'password.required'             => 'Password wajib diisi',
            'password.string'               => 'Password harus berupa string'
        ]);

        $validator = Validator::make($request->all(), $peraturan, $pesan);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email_pelamar'     => $request->input('email_pelamar'),
            'password'          => $request->input('password'),
        ];


        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect('/');
        } else { // false

            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect('masuk');
        }
    }





    //==========================================    PAGE DAFTAR


    public function signup_user()
    {
        return view('/layout.page.myaccount_signup');
    }

    public function register(Request $request)
    {
        $peraturan = ([
            'nama_account'               => 'required|min:3|max:40',
            'email_account'              => 'required|email|unique:account_pelamar,email_pelamar',
            'no_account'                 => 'required|digits:12|unique:account_pelamar,no_hp_pelamar',
            'password'                   => 'required|min:5|max:30'
        ]);

        $pesan = ([
            'nama_account.required'         => 'Nama Lengkap wajib diisi',
            'nama_account.min'              => 'Nama lengkap minimal 3 karakter',
            'nama_account.max'              => 'Nama lengkap maksimal 35 karakter',
            'email_account.required'        => 'Email wajib diisi',
            'email_account.email'           => 'Email tidak valid',
            'email_account.unique'          => 'Email sudah terdaftar',
            'no_account.required'           => 'nomor hp wajib diisi',
            'no_account.digits'             => 'Nomor 11 digits',
            'no_account.unique'             => 'Nomor sudah terdaftar',
            'password.required'             => 'Password wajib diisi',
            'password.confirmed'            => 'Password tidak sama dengan konfirmasi password'
        ]);

        $validator = Validator::make($request->all(), $peraturan, $pesan);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $Admins = new Account();
        $Admins->nama_account = ucwords(strtolower($request->nama_pnama_accountelamar));
        $Admins->email_account = strtolower($request->email_account);
        $Admins->no_account = strtolower($request->no_account);
        $Admins->password = Hash::make($request->password);
        $Admins->email_verified_at = \Carbon\Carbon::now();
        $simpan = $Admins->save();

        if ($simpan) {
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect('/masuk');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }










    public function jobs_non_user()
    {
        return view('/layout.page.pekerjaan');
    }


    // public function homepage_non_user()
    // {
    //     return view('/layout.page.index');
    // }

    // public function categori_non_user()
    // {
    //     return view('/layout.page.kategori');
    // }

    public function signin_non_user()
    {
        return view('/layout.page.myaccount_signin');
    }

    public function signup_non_user()
    {
        return view('/layout.page.myaccount_signup');
    }


    // public function jobs_non_user()
    // {
    //     return view('/layout.page.pekerjaan');
    // }

    //=============user

    public function profile_user()
    {
        return view('/layout.page_user.profile');
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
