<?php

namespace App\Http\Controllers;

use AddJobs as GlobalAddJobs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Admins;
use App\Models\MasterJobs;
use App\Models\AddJobs;
use App\Models\kategori;
use Barryvdh\Debugbar\Facade as Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
  

public function admin () 
{
    $data = AddJobs::leftjoin ('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
        ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
        ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
        ->paginate(5);

        return view ('admin.dashboard', compact('data'));

}


function admin_resume_perusahaan () 
{
    $resume = AddJobs::leftjoin ('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
        ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
        ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
        ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
        ->paginate(10);

        return view ('admin.resume_perusahaan',compact('resume'));
}


public function delete_data_master($id)
{

    $master = MasterJobs::find($id);
    $master->delete();
    return back();

}

public function blacklist_resume_p($id)
{
    
    $resume = AddJobs::find($id);
    $resume->delete();
    return back();
}
          
      
public function data_master_u()
{
    $MasterJobs = MasterJobs::all();
    return view('admin.data_master_u', ['MasterJobs' => $MasterJobs]);
}


public function admin_blacklist_resume () {

    $resumeblacklist = AddJobs::onlyTrashed()->get();
    $masterdata = MasterJobs::onlyTrashed()->get();
    return view('admin.blacklist_resume', ['resumeblacklist' => $resumeblacklist], ['masterdata' => $masterdata]);

}


public function resume_restore($id)
{
    $restoreresume = AddJobs::onlyTrashed()->where('jobs_id',$id);
    $restoreresume->restore();
    return back();
}


public function resume_delete($id)
{
    
    
}

public function master_data_restore($id) 
{
    $masterid = MasterJobs::onlyTrashed()->where('id',$id);
    $masterid->restore();
    return back();
}

public function master_data_deleted($id) 
{
    $deleteresume = MasterJobs::onlyTrashed()->where('id',$id);
    $deleteresume->forceDelete();

    return back();
}






    public function admin_data_perusahaan () {
    return view ('admin.data_perusahaan');
}    

    public function admin_data_user () {
    return view ('admin.data_user');
}

    public function admin_resume_pelamar () {
    return view ('admin.resume_pelamar');
}



   

    
    






 

    public function admin_blacklist_pengguna () {
    return view ('admin.blacklist_pengguna');
}

    public function admin_profile_edit () {
    return view ('admin.edit.admin_profile_edit');
}

    public function profile_admin () {
    return view ('admin.admininternal');
}

    public function data_master_p () {
    return view ('admin.data_master_p');
}






//ADMIN LOGIN

    public function admin_login () {
    return view ('admin.admin_login');
}

    public function login (Request $request) 
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
    
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
    
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
    {
        Auth::logout(); // menghapus session yang aktif
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
