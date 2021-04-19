<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddJobs;
 
class AddJobsController extends Controller
{
    public function view_jobs()
    {
        return view('/layout.page_user.tambah-pekerjaan');
    }
    
    
    public function add_jobs(Request $request)
    {
        $this->validate($request,[
    		'judul_jobs' => 'required',
    		'lokasi_jobs' => 'required',
    		'tag_jobs' => 'required',
    		'deskripsi_jobs' => 'required',
    		'nib_perusahaan' => 'required',
    		'jobs_dibuka' => 'required',
    		'jobs_ditutup' => 'required',
    		
    	]);
 
        AddJobs::create([
    		'judul_jobs' => $request->judul_jobs,
    		'lokasi_jobs' => $request->lokasi_jobs,
    		'tag_jobs' => $request->tag_jobs,
    		'deskripsi_jobs' => $request->deskripsi_jobs,
    		'nib_perusahaan' => $request->nib_perusahaan,
    		'jobs_dibuka' => $request->jobs_dibuka,
    		'jobs_ditutup' => $request->jobs_ditutup
    		
        ]);
 
    	return redirect('/pegawai');
    }

    
}
