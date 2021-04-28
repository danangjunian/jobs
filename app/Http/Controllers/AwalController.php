<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddJobs;
use App\Models\kategori;
use App\Models\MasterJobs;
use Illuminate\Support\Facades\DB;


class AwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_pelamar()
    {
        $count = AddJobs::count();
        $anggota = MasterJobs::count();
        $gambar =         $resume = AddJobs::leftjoin('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
            ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
            ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
            ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
            ->paginate(10);

        return view('layout.page-awal.index-awal', compact('resume','count','anggota'));
    }
    public function halaman_pekerjaan_awal($id)
    {
        $awal = AddJobs::find($id);
        $a = kategori::all();
        return view('layout.page-awal.halaman-pekerjaan-awal', compact('awal','a'));
        
        // return view('layout.page-awal.halaman-pekerjaan-awal', ['awal','a' => $awal]);
    }

    public function browse_jobs()
    {
        $jobslist = AddJobs::leftjoin('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
            ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
            ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
            ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
            ->paginate(10);
        return view('layout.page-awal.browse-jobs-awal', compact('jobslist'));
    }


    // public function detail()
    // {
    //     $jobslist = AddJobs::leftjoin('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
    //         ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
    //         ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
    //         ->leftjoin('tag', 'add_jobs.tag_id', '=', 'tag.id')
    //         ->paginate(10);
    //     return view('layout.page-awal.halaman-pekerjaan-awal', compact('jobslist'));
    // }






























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
