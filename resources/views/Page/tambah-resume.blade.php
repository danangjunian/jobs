@extends('layout.master2')

@section('title', 'home')



<!-- Header === -->

<!-- Content=== -->

@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="single submit-page">
    <div class="container">

        <div class="sixteen columns">
            <h2><i class="fa fa-plus-circle"></i> Add Resume</h2>
        </div>

    </div>
</div>


<!-- Content
================================================== -->
<div class="container">

    <!-- Submit Page -->
    <div class="sixteen columns">
        <div class="submit-page">

            <!-- Notice -->
            <div class="notification notice closeable margin-bottom-40">
                <p><span>Sudah punya akun?</span>Jika Anda tidak memiliki akun, Anda dapat membuatnya di bawah dengan
                    memasukkan alamat email Anda. Sebuah kata sandi akan secara otomatis dikirimkan ke email Anda.</p>
            </div>


            <!-- Linked In -->
            <div class="form">
                <h5>LinkedIn</h5>
                <a href="#" class="button linkedin-btn">Import dari LinkedIn</a>
            </div>

            <!-- Email -->
            <div class="form">
                <h5>Nama Lengkap</h5>
                <input class="search-field" type="text" placeholder="nama lengkap" value="" />
            </div>

            <!-- Email -->
            <div class="form">
                <h5>Email</h5>
                <input class="search-field" type="text" placeholder="abcd@example.com" value="" />
            </div>

            <!-- Title -->
            <div class="form">
                <h5>Professional Title</h5>
                <input class="search-field" type="text" placeholder="e.g. Web Developer" value="" />
            </div>

            <!-- Location -->
            <div class="form">
                <h5>Lokasi</h5>
                <input class="search-field" type="text" placeholder="co. surabaya, jawatimur" value="" />
            </div>

            <!-- Logo -->
            <div class="form">
                <h5>Photo <span>(optional)</span></h5>
                <label class="upload-btn">
                    <input type="file" multiple />
                    <i class="fa fa-upload"></i> Browse
                </label>
                <span class="fake-input">No file selected</span>
            </div>

            <!-- Email -->
            <div class="form">
                <h5>Video <span>(optional)</span></h5>
                <input class="search-field" type="text" placeholder=" Link video tentang kamu " value="" />
            </div>

            <!-- Description -->
            <div class="form">
                <h5>Deskripsikan tentang kamu</h5>
                <textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
            </div>


            <!-- Add URLs -->
            <div class="form with-line">
                <h5>URL(Sosial Media) <span>(optional)</span></h5>
                <div class="form-inside">

                    <!-- Adding URL(s) -->
                    <div class="form boxed box-to-clone url-box">
                        <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                        <input class="search-field" type="text" placeholder="Name" value="" />
                        <input class="search-field" type="text" placeholder="http://" value="" />
                    </div>

                    <a href="#" class="button gray add-url add-box"><i class="fa fa-plus-circle"></i> Add URL</a>
                    <p class="note">Berikan tautan ke salah satu situs web atau profil jejaring sosial Anda.</p>
                </div>
            </div>


            <!-- Education -->
            <div class="form with-line">
                <h5>Pendidikan</h5>
                <div class="form-inside">

                    <!-- Add Education -->
                    <div class="form boxed box-to-clone education-box">
                        <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                        <input class="search-field" type="text" placeholder="Nama Sekolah" value="" />
                        <input class="search-field" type="text" placeholder="Qualification(s)" value="" />
                        <input class="search-field" type="text" placeholder="tahun mulai & lulus" value="" />
                        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Keterangan (optional)"></textarea>
                    </div>

                    <a href="#" class="button gray add-education add-box"><i class="fa fa-plus-circle"></i> Tambah Pendidikan</a>
                </div>
            </div>


            <!-- Experience  -->
            <div class="form with-line">
                <h5>Pengalaman <span>(optional)</span></h5>
                <div class="form-inside">

                    <!-- Add Experience -->
                    <div class="form boxed box-to-clone experience-box">
                        <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                        <input class="search-field" type="text" placeholder="Nama Perusahaan" value="" />
                        <input class="search-field" type="text" placeholder="Judul pekerjaan" value="" />
                        <input class="search-field" type="text" placeholder="tanggal Mulai dan Selesai" value="" />
                        <textarea name="desc1" id="desc1" cols="30" rows="10" placeholder="Deskripsi pekerjaan (optional)"></textarea>
                    </div>

                    <a href="#" class="button gray add-experience add-box"><i class="fa fa-plus-circle"></i> Tambah Pekerjaan</a>
                </div>
            </div>


            <div class="divider margin-top-0 padding-reset"></div>
            <a href="#" class="button big margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>

        </div>
    </div>

</div>

@endsection