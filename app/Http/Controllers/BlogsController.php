<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;


class BlogsController extends Controller
{
    public function view()
    {
        
        return view('layout.page-awal.blog-inputan');
    }

/////////////////////////////// view hasil input post/////////////////////////////

    public function lihat(){
        $post = blogs::get();
        return view('layout.page-awal.blog-post-awal',compact('post'));
    }

    ////////////////////////////////////////////////  insert data blog////////////////////////////


    public function masukan(Request $request){
        $this->validate($request,[
            'judul'=> 'required',
            'images'=> 'required|file|mimes:jpg,docx,doc,pdf,png,jpeg',
            'content'=> 'required'
        ]);
        $post= new blogs();
        $file=$request->images;
        $filename=time().'.'.$file->getClientOriginalExtension();
            $request->images->move('data_file',$filename);

            $post->images=$filename;
            $post->judul=$request->judul;
            $post->sinopsis=$request->sinopsis;
            $post->content=$request->content;

            $post->save();
            return redirect('/blog-post-awal');
    }
    // public function masukan(Request $request){
    //     $post = new blogs();

    //     $file = $request->images;
    //     $filename = time().'.'.$file->getClientOriginalExtension();
    //     $request->images->move('data_file', $filename);

    //     $post->images=$filename;
    //     $post->judul = $request->judul;
    //     $post->sinopsis = $request->sinopsis;
    //     $post->content=$request->content;

    //     $post->save();
    //     return view('masuk');
    // }

    public function detail($id){
        $post= blogs::find($id);
        return view ('layout/page-awal/blog-detail',compact('post'));
    }










    // public function blog_post()
    // {
    //     return view('layout.page-awal.blog-post-awal');
    // }


}
