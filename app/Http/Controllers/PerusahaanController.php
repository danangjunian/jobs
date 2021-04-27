<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddJobs;
use App\Models\TipeKerja;
use App\Models\kategori;
use App\Models\Tag;
use App\Models\MasterJobs;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_perushaan()
    {
        $count = AddJobs::count();
        $anggota = MasterJobs::count();
        $gambar =         $resume = AddJobs::leftjoin('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
            ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
            ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
            ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
            ->paginate(10);

        return view('layout.page_user.homepage_user', compact('resume','count','anggota'));
    }




    public function kelola_kerja()
    {
        $kelolajobs = AddJobs::leftjoin('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
            ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
            ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
            ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
            ->get();


        return view('layout.page.kelola-jobs', compact('kelolajobs'));
    }


    public function view_jobs()
    {

        $kategori = kategori::all();
        $tipekerja = TipeKerja::all();
        $tags = Tag::all();
        return view('/layout.page_user.tambah-pekerjaan', compact('tipekerja', 'kategori', 'tags'));
    }


    public function add_jobs(Request $request)
    {
        $request->validate([

            // 	'master_id ' 		=> 'required',
            // 	'tipekerja_id' 		=> 'required',
            // 	'kategori_id' 		=> 'required',
            // 	'tag_id' 			=> 'required',
            'judul_jobs'         => 'required|min:3|max:70',
            'lokasi_jobs'         => 'required',
            'deskripsi_jobs'     => 'required',
            'jobs_dibuka'         => 'required',
            'jobs_ditutup'         => 'required',

        ]);


        $data = new AddJobs;
        $data->master_id             = $request->master_id;
        $data->tipekerja_id         = $request->tipekerja_id;
        $data->kategori_id            = $request->kategori_id;
        $data->tag_id                = $request->tag_id;
        $data->judul_jobs             = $request->judul_jobs;
        $data->lokasi_jobs            = $request->lokasi_jobs;
        $data->deskripsi_jobs         = $request->deskripsi_jobs;
        $data->jobs_dibuka            = $request->jobs_dibuka;
        $data->jobs_ditutup         = $request->jobs_ditutup;
        $data->save();

        // AddJobs::create($request->all());

        return redirect('/admin/lawang');
    }




    public function cv()
    {
        return view('layout.page_user.atur-aplikasi');
    }
    public function cari_cv()
    {
        return view('layout.page_user.cari-resume');
    }
    public function resume()
    {
        return view('layout.page_user.resume-page');
    }
    public function hal_kerja($id)
    {
        $awal = AddJobs::find($id);
        $a = kategori::all();
        return view('layout.page-awal.halaman-pekerjaan-awal', compact('awal','a'));

        // return view('layout.page_user.hal-pekerjaan');
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
