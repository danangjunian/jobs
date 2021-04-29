<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    //

        public function view_cv (){
            $resume->cv::get();
            return view('layout/page/preview-resume',compact('resume'));
        }
    public function inicv(Request $request){
        // $this->validate($request,[
        //     'judul'=> 'required',
        //     'images'=> 'required|file|mimes:jpg,docx,doc,pdf,png,jpeg',
        //     'content'=> 'required'
        // ]);
        $resume= new cv();
        $file=$request->images;
        $filename=time().'.'.$file->getClientOriginalExtension();
            $request->images->move('data_file',$filename);

            $resume->gambar=$filename;
            $resume->nama=$request->nama;
            $resume->alamat=$request->alamat;
            $resume->website=$request->website;
            $resume->email=$request->email;
            $resume->tentang=$request->tentang;
            $resume->skill=$request->skill;
            $resume->medsos=$request->medsos;
            $resume->sd=$request->sd;
            $resume->smp=$request->smp;
            $resume->sma=$request->sma;
            $resume->s1=$request->s1;
            $resume->tahun_sd=$request->tahun_sd;
            $resume->tahun_smp=$request->tahun_smp;
            $resume->tahun_sma=$request->tahun_sma;
            $resume->tahun_s1=$request->tahun_s1;
            $resume->ipk=$request->ipk;
            $resume->tahun_kerja=$request->tahun_kerja;
            $resume->perusahaan=$request->perusahaan;
            $resume->jabatan=$request->jabatan;
            

            $resume->save();
            return redirect('/add-cv');
    }
    // public function detail($id){
    //     $resume= cv::find($id);
    //     return view ('layout/page/preview-resume',compact('resume'));
    // }
}
