<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddJobs;
use App\Models\kategori;
use App\Models\MasterJobs;
use App\Models\Tag;
use App\Models\TipeKerja;

class AddJobsController extends Controller
{
    
 public function hal_kerja()
    {

        $gabung = AddJobs::join('master_jobs','add_jobs.master_id','=','master_jobs.id')
                        ->join('tipe_kerja','add_jobs.tipekerja_id','=','tipe_kerja.id')
                        ->join('kategori_kerja','add_jobs.kategori_id','=','kategori_kerja.id')
                        ->join('tag','add_jobs.tag_id','=','tag.id');

                        return view('layout.page-awal.halaman-pekerjaan-awal',compact('gabung',));

    } 
	

    
}
