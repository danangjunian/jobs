<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;

use App\Models\AddJobs;
use App\Models\kategori;
use App\Models\MasterJobs;
use App\Models\TipeKerja;
use Illuminate\Support\Facades\DB;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lihatjobs = AddJobs::leftjoin ('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
        ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
        ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
        ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
        ->paginate(5);

        return view('layout.page.index',compact('lihatjobs'));
    }


    public function __construct()
        {
            
        $this->AddJobs = new AddJobs;
    
        }




    public function jobs()
    {
        $lihatjobs = AddJobs::leftjoin ('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
        ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
        ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
        ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
        ->paginate(5);

        return view('layout.page.browse-jobs',compact('lihatjobs'));
    }









    public function kategori_pelamar()
    {
        return view('layout.page.cari-kategori');
    }

    public function add_resume_user()
    {
        return view('/layout.page_user.tambah-resume');
    }
    public function lihat_resume()
    {
        return view('layout.page.preview-resume');
    }
    public function edit_resume()
    {
        return view('layout.page.atur-resume');
    }
    public function pemberitahuan()
    {
        return view('layout.page.job-alerts');
    }





//////////////////////////////////////////////  blogs//////////////////////////////


    public function view()
    {
        
        return view('layout.page-awal.blog-inputan');
    }
    public function berita_single()
    {
        return view('layout.blog.blog-post');
    }

























    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
