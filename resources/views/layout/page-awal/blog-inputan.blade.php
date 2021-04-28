@extends('layout.master.master_awal')

@section('title', 'blog')



<!-- Header === -->

<!-- Content=== -->

@section('content')

<form action="/blog-post-awal" method="post" enctype="multipart/form-data" >
    {{ @csrf_field() }}
    <table class="inputan">
        <tr>
            <td>judul</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="judul" placeholder="Judul"></td>
        </tr>
        <tr>
            <td>images</td>
            <td>:</td>
            <td><input type="file" class="form-control" name="images"></td>
        </tr>
        <tr>
            <td>Sinopsis</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="sinopsis" placeholder="isikan berita"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td>:</td>
            <td><textarea type="text" class="form-control" name="content" placeholder="isikan berita"></textarea></td>
        </tr>

        <tr>
            <td>
            <button>simpan</button>
            </td>
        </tr>
        


    </table>




</form>
@endsection