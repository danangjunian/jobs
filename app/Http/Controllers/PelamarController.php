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

    public function halaman()
        {
            
            // $halamanjobs = AddJobs::find($id);
            // $master = MasterJobs::find($id);
            // $kategori = kategori::find($id);
            // $tipe = TipeKerja::find($id);
            // return view('layout.page.halaman-pekerjaan', 
            // ['halamanjobs' => $halamanjobs],
            // ['master' => $master],
            // ['tipe' => $tipe],
            // ['kategori' => $kategori]);
    
            // 
            // $kategori = DB::table('kategori_kerja')->where('id', $id)->first();
            // $master = DB::table('master_jobs')->where('id', $id)->first();
            // $tipe = DB::table('tipe_kerja')->where('id', $id)->first();
            // $tag = DB::table('tag')->where('id', $id)->first();
            // $halamanjobs = DB::table('add_jobs')->where('jobs_id', $id)->first();
            $data = ['addjobs' => $this->Addjobs->alldata()];
            return view('layout.page.halaman-pekerjaan', $data);

        }




    public function jobs()
    {
        return view('layout.page.browse-jobs');
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
    public function berita()
    {
        return view('layout.blog.blogs');
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
