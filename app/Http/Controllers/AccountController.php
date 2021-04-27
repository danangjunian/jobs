<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Account;
use App\Models\akun_p;
use App\Models\akun_u;
use Illuminate\Http\Request;

class AccountController extends Controller
{



// HOME PAGE 
   public function homepage_non_user () {
       return view('/layout.page.index');
   }


// PAGE KATEGORI
   public function categori_non_user () {
       return view('/layout.page.kategori');
   }


//=========================================== PAGE MASUK

   public function signin_user () {
       return view('layout.page-awal.login-awal');
   }
 
   public function masuk_u (Request $request) 
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

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput($request->all);
    }


    if (Auth::guard('pelamar')->attempt($request->only('email_pelamar','password'))) { 
        return redirect()->intended('/lawang');

    }  // false

        return redirect('/masuk');
    
    }

    public function logoutP()
    {
       if (Auth::guard('pelamar')->check()){
        Auth::guard('pelamar')->logout();
       } 
        return redirect('admin/login');
    }
   








//==========================================    PAGE DAFTAR


   public function signup_user () {
       return view('/layout.page-awal.daftar-awal');
   }
 
   public function register_P(Request $request)
   {
        $peraturan = ([
            'nama_pendaftar'               => 'required|min:3|max:40',
            'email_perusahaan'              => 'required|email|unique:akun_p,email_perusahaan', 
            'password'                   => 'required|min:5|max:30'
        ]);

        $pesan = ([
            'nama_pendaftar.required'         => 'Nama Lengkap wajib diisi',
            'nama_pendaftar.min'              => 'Nama lengkap minimal 3 karakter',
            'nama_pendaftar.max'              => 'Nama lengkap maksimal 35 karakter',
            'email_perusahaan.required'        => 'Email wajib diisi',
            'email_perusahaan.email'           => 'Email tidak valid',
            'email_perusahaan.unique'          => 'Email sudah terdaftar', 
            'password.required'             => 'Password wajib diisi',
            'password.confirmed'            => 'Password tidak sama dengan konfirmasi password'
        ]);

            $validator = Validator::make($request->all(), $peraturan, $pesan);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all);
            }
        
            $Admins = new akun_p();
            $Admins->nama_pendaftar = ucwords(strtolower($request->nama_pendaftar));
            $Admins->email_perusahaan = strtolower($request->email_perusahaan);
            $Admins->password = Hash::make($request->password);
            $simpan = $Admins->save();

            if($simpan){
            return redirect('/masuk')->with('toast_success', 'Masuk Sebagai Perusahaan');
        } else {
            return back();
        }
                
    }

    public function register_U(Request $request)
   {
        $peraturan = ([
            'nama_pelamar'               => 'required|min:3|max:40',
            'email_pelamar'              => 'required|email|unique:akun_u,email_pelamar', 
            'password'                   => 'required|min:5|max:30'
        ]);

        $pesan = ([
            'nama_pelamar.required'         => 'Nama Lengkap wajib diisi',
            'nama_pelamar.min'              => 'Nama lengkap minimal 3 karakter',
            'nama_pelamar.max'              => 'Nama lengkap maksimal 35 karakter',
            'email_pelamar.required'        => 'Email wajib diisi',
            'email_pelamar.email'           => 'Email tidak valid',
            'email_pelamar.unique'          => 'Email sudah terdaftar', 
            'password.required'             => 'Password wajib diisi',
            'password.confirmed'            => 'Password tidak sama dengan konfirmasi password'
        ]);

            $validator = Validator::make($request->all(), $peraturan, $pesan);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all);
            }
        
            $Admins = new akun_u();
            $Admins->nama_pelamar = ucwords(strtolower($request->nama_pelamar));
            $Admins->email_pelamar = strtolower($request->email_pelamar);
            $Admins->password = Hash::make($request->password);
            $simpan = $Admins->save();

            if($simpan){
            return redirect('/masuk')->with('toast_success', 'Masuk sebagai Pelamar');
        } else {
            return back();
        }
                
    }
 
  







   
   public function jobs_non_user () {
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
