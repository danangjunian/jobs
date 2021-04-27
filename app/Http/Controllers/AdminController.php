<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Admins;
use App\Models\MasterJobs;
use App\Models\AddJobs;
use App\Models\kategori;
use App\Models\Tag;
use Barryvdh\Debugbar\Facade as Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{

<<<<<<< HEAD

    public function admin()
    {
        $data = AddJobs::leftjoin('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
            ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
            ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
            ->paginate(5);
=======
public function admin () 
{
    $jumlahperusahaan = MasterJobs::count();
    $jumlahjobs = AddJobs::count();
    $data = AddJobs::leftjoin ('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
        ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
        ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
        ->paginate(5);

        return view ('admin.dashboard', compact('data', 'jumlahperusahaan', 'jumlahjobs'));
>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b

        return view('admin.dashboard', compact('data'));
    }


<<<<<<< HEAD
    function admin_resume_perusahaan()
    {
        $resume = AddJobs::leftjoin('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
            ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
            ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
            ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
            ->paginate(10);

        return view('admin.resume_perusahaan', compact('resume'));
    }
=======
function admin_resume_perusahaan () 
{
        $resume = AddJobs::leftjoin ('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
    ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
    ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
    ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
    ->paginate(10);

        return view ('admin.resume_perusahaan', ['resume' => $resume]);
}
>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b


    public function delete_data_master($id)
    {

<<<<<<< HEAD
        $master = MasterJobs::find($id);
        $master->delete();
        return back();
    }
=======
    $master = MasterJobs::find($id);
    $master->delete();
    return back()->with('toast_success', 'Data Telah Terhapus');
>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b

    public function blacklist_resume_p($id)
    {

<<<<<<< HEAD
        $resume = AddJobs::find($id);
        $resume->delete();
        return back();
    }
=======
public function blacklist_resume_p($id)
{
    
    $resume = AddJobs::find($id);
    $resume->delete();
    return back()->with('toast_success', 'Data Telah Terhapus');
}
          
      
public function data_master_u()
{
    $MasterJobs = MasterJobs::all();
    return view('admin.data_master_u', ['MasterJobs' => $MasterJobs]);
}
>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b


    public function data_master_u()
    {
        $MasterJobs = MasterJobs::all();
        return view('admin.data_master_u', ['MasterJobs' => $MasterJobs]);
    }


    public function admin_blacklist_resume()
    {

        $resumeblacklist = AddJobs::onlyTrashed()->get();
        $masterdata = MasterJobs::onlyTrashed()->get();
        return view('admin.blacklist_resume', ['resumeblacklist' => $resumeblacklist], ['masterdata' => $masterdata]);
    }

<<<<<<< HEAD
=======
public function resume_restore($id)
{
    $restoreresume = AddJobs::onlyTrashed()->where('jobs_id',$id);
    $restoreresume->restore();
    return back()->with('toast_success', 'Data Telah di Restore');
}
>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b

    public function resume_restore($id)
    {
        $restoreresume = AddJobs::onlyTrashed()->where('jobs_id', $id);
        $restoreresume->restore();
        return back();
    }


<<<<<<< HEAD
    public function resume_delete($id)
    {
    }

    public function master_data_restore($id)
    {
        $masterid = MasterJobs::onlyTrashed()->where('id', $id);
        $masterid->restore();
        return back();
    }

    public function master_data_deleted($id)
    {
        $deleteresume = MasterJobs::onlyTrashed()->where('id', $id);
        $deleteresume->forceDelete();
=======
public function master_data_restore($id) 
{
    $masterid = MasterJobs::onlyTrashed()->where('id',$id);
    $masterid->restore();
    return back()->with('toast_success', 'Data Telah di Restore');
}

public function master_data_deleted($id) 
{
    $deleteresume = MasterJobs::onlyTrashed()->where('id',$id);
    $deleteresume->forceDelete();
    return back()->with('toast_success', 'Data Telah di Terhapus Permanent');
}

function tambahdata ()
{
    return view ('admin.tambah.tambah');

}


function tambah_kategori (Request $request)
{
    $peraturan = ([
        'kategori'                     => 'required|min:3|max:30|unique:kategori_kerja,kategori',
    ]);

    $pesan = ([
        'kategori.required'            => 'Data Wajib diisi',
        'kategori.min'                 => 'Jangan Ngawur Mengisikan Data',
        'kategori.max'                 => 'Data Terlalu Panjang',
        'kategori.unique'              => 'Duplikat Data',                 
       
    ]);



        $validator = Validator::make($request->all(), $peraturan, $pesan);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
    
        $newkategori = new kategori();
        $newkategori->kategori = strtolower($request->kategori);
        $data = $newkategori->save();

        if($data){
        return back()->with('toast_success', 'Kategori Baru Telah ditambahkan');
    } else {
        return back();
    }
           

}

function tambah_tags (Request $request)
{
    $peraturan = ([
        'tag'                     => 'required|min:3|max:20|unique:tag,tag',
    ]);

    $pesan = ([
        'tag.required'            => 'Data Wajib diisi',
        'tag.min'                 => 'Jangan Ngawur Mengisikan Data',
        'tag.max'                 => 'Data Terlalu Panjang',
        'tag.unique'              => 'Duplikat Data',                 
       
    ]);

        $validator = Validator::make($request->all(), $peraturan, $pesan);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
    
        $newtag = new Tag();
        $newtag->tag = strtolower($request->tag);
        $save = $newtag->save();

        if($save){
        return back()->with('toast_success', 'Tags Baru Telah ditambahkan');
    } else {
        return back();
    }
           

}

function tambah_tipe_kerja (Request $request)
{
    $peraturan = ([
        'tipe_pekerjaan'                     => 'required|min:3|max:30|unique:tipe_kerja,tipe_pekerjaan',
    ]);

    $pesan = ([
        'tipe_pekerjaan.required'            => 'Data Wajib diisi',
        'tipe_pekerjaan.min'                 => 'Jangan Ngawur Mengisikan Data',
        'tipe_pekerjaan.max'                 => 'Data Terlalu Panjang',
        'tipe_pekerjaan.unique'              => 'Duplikat Data',                 
       
    ]);

        $validator = Validator::make($request->all(), $peraturan, $pesan);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
    
        $newtag = new Tag();
        $newtag->tipe_pekerjaan = strtolower($request->tipe_pekerjaan);
        $save = $newtag->save();

        if($save){
        return back()->with('toast_success', 'Tags Baru Telah ditambahkan');
    } else {
        return back();
    }
           

}
>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b

        return back();
    }

public function tambahadmin () 
{
    return view ('admin.tambah.tambah_admin');
}

public function add_admin (Request $request)
{

    $peraturan = ([
        'nama_admin'                  => 'required|min:3|max:40',
        'email_admin'                 => 'required|email|unique:admins,email_admin',
        'no_hp_admin'                 => 'required|digits:12|unique:admins,no_hp_admin',  
        'password'                    => 'required|min:8|max:30'
    ]);

    $pesan = ([
        'nama_admin.required'            => 'Nama Lengkap wajib diisi',
        'nama_admin.min'                 => 'Nama lengkap minimal 3 karakter',
        'nama_admin.max'                 => 'Nama lengkap maksimal 35 karakter',
        'email_admin.required'           => 'Email wajib diisi',
        'email_admin.email'              => 'Email tidak valid',
        'email_admin.unique'             => 'Email sudah terdaftar', 
        'no_hp_admin.required'           => 'nomor hp wajib diisi',
        'no_hp_admin.digits'             => 'Nomor 11 digits',
        'no_hp_admin.unique'             => 'Nomor sudah terdaftar',
        'password.required'              => 'Password wajib diisi',
        'password.confirmed'             => 'Password tidak sama dengan konfirmasi password'
    ]);

        $validator = Validator::make($request->all(), $peraturan, $pesan);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
    
        $newadmin = new Admins();
        $newadmin->nama_admin = ucwords(strtolower($request->nama_admin));
        $newadmin->email_admin = strtolower($request->email_admin);
        $newadmin->no_hp_admin = strtolower($request->no_hp_admin);
        $newadmin->password = Hash::make($request->password);
        $newadmin->email_verified_at = \Carbon\Carbon::now();
        $data = $newadmin->save();

        if($data){
        Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
        return back()->with('toast_success', 'Admin Telah ditambahkan');
    } else {
        Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
        return back();
    }
           
}


function lihattanggal ()
{
    return view ('admin.data.pertanggal');

}

function cetakpertanggal ($tglawal, $tglakhir)
{
    $tgl = AddJobs::whereBetween('jobs_dibuka', [$tglawal, $tglakhir])->get();
    return view ('admin.data.cetak_pertanggal', compact('tgl'));
}

function pages($id) {
    $datas = Admins::find($id);
      return view('admin.masteradmin',compact('datas'));
}



    public function admin_data_perusahaan()
    {
        return view('admin.data_perusahaan');
    }

    public function admin_data_user()
    {
        return view('admin.data_user');
    }

    public function admin_resume_pelamar()
    {
        return view('admin.resume_pelamar');
    }












<<<<<<< HEAD
=======
    public function profile_admin () 
    {
        $datas = Admins::first();
    return view ('admin.admininternal', compact('datas'));
    }


>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b



    public function admin_blacklist_pengguna()
    {
        return view('admin.blacklist_pengguna');
    }

    public function admin_profile_edit()
    {
        return view('admin.edit.admin_profile_edit');
    }

    public function profile_admin()
    {
        return view('admin.admininternal');
    }

    public function data_master_p()
    {
        return view('admin.data_master_p');
    }






    //ADMIN LOGIN

    public function admin_login()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
        $peraturan = ([
            'email_admin'                => 'required|email',
            'password'                   => 'required|string'
        ]);

        $pesan = ([
            'email_admin.required'          => 'Email wajib diisi',
            'email_admin.email'             => 'Email tidak valid',
            'password.required'             => 'Password wajib diisi',
            'password.string'               => 'Password harus berupa string'
        ]);

        $validator = Validator::make($request->all(), $peraturan, $pesan);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
<<<<<<< HEAD

        $data = [
            'email_admin'     => $request->input('email_admin'),
            'password'          => $request->input('password'),
        ];


        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login berhasil
            return redirect('/admin/lawang');
        } else { // false

            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect('admin/login');
        }
    }

    public function logout()
=======
    
        // $data = [
        //     'email_admin'     => $request->input('email_admin'),
        //     'password'          => $request->input('password'),
        // ];
    
        
        if (Auth::guard('adminlogin')->attempt($request->only('email_admin','password'))) { 
            return redirect()->intended('/admin/lawang');
    
        }  // false
    
            debugbar::info('gagal');
            Session::flash('error', 'Email atau password salah');
            return redirect('/admin/login');
        
        
        }
       
       public function logout()
>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b
    {
       if (Auth::guard('adminlogin')->check()){
        Auth::guard('adminlogin')->logout();
       } 
        return redirect('admin/login');
    }

    //LOGIN MAS WIRA 
    // $data = Admins::where('email_admin', $request -> email_admin)->get();
    //               if ($data->count()<1) 
    //               {
    //                 return view('admin.data_master_p');
    //               }
    //               else {
    //                   if (Hash::check($request->password,$data[0]->password)) {
    //                       return view('admin/lawang');
    //                   }
    //                   else {
    //                       return view('admin.data_master_p');
    //                   }
    //               }

    //========    

}


