<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.page.index');
    }
    public function halaman()
    {
        return view('layout.page.halaman-pekerjaan');
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
