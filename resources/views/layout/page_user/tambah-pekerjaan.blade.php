@extends('layout.master.master_user')

@section('title', 'Tambah-pekerjaan')



<!-- Header === -->

<!-- Content=== -->

@section('content')
<!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="single">
        <div class="container">
    
            <div class="sixteen columns">
                <h2>Tambah Pekerjaan</h2>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li>Tambah Pekerjaan</li>
                    </ul>
                </nav>
            </div>
    
        </div>
    </div>

<!--===================================================-->

<div class="container">

    <!-- Submit Page -->
    <div class="sixteen columns">
        <div class="submit-page">

    <!-- Notice -->

    
    <!-- Title -->
    <form method="post" action="/add/jobs">
        @csrf
            <div class="form">
                <h5>Judul Pekerjaan <span style="color: red">*</span></h5>
                <input class="search-field" name="judul_jobs" type="text" placeholder="contoh 'crew store'" value="" />
            </div>

            <!-- Location -->
            <div class="form">
                <h5>Lokasi <span style="color: red">*</span></h5>
                <input class="search-field" name="lokasi_jobs" type="text" placeholder="contoh. Surabaya" value="" />
                <p class="note">Biarkan kosong jika lokasinya tidak penting</p>
            </div>

            <!-- Job Type -->
            <div class="form">
                <h5>Tipe Pekerjaan <span style="color: red">*</span></h5>
                <select data-placeholder="Full-Time" class="chosen-select-no-single" name="tipe-pekerjaan">
                    <option value="1">Full-Time</option>
                    <option value="2">Part-Time</option>
                    <option value="2">Internship</option>
                    <option value="2">Freelance</option>
                </select>
            </div>


            <!-- Choose Category -->
            <div class="form">
                <div class="select">
                    <h5>Kategori <span style="color: red">*</span></h5>
                    <select data-placeholder="kategori pekerjaan" class="chosen-select" name="kategori" multiple>
                        <option value="1">Akuntansi</option>
                        <option value="2">Mekanik / Otomotive</option>
                        <option value="3">HSE / Kontruksi </option>
                        <option value="4">Pendidikan</option>
                        <option value="5">Kesehatan</option>
                        <option value="6">Pelayanan </option>
                        <option value="7">Transportasi & Logistik</option>
                        <option value="8">Telekomunikasi & Ilmu Teknologi</option>
                        <option value="9">Programmer</option>
                        <option value="10">Freelance</option>
                        <option value="11">Seni / Desain / Fashion</option>
                        <option value="12">Start up & Fintech </option>
                    </select>
                </div>
            </div>

            <!-- Tags -->
            <div class="form">
                <h5>Tag Pekerjaan <span style="color: red">*</span></h5>
                <input class="search-field" type="text" name="tag_jobs" placeholder="e.g. PHP, Social Media, Management, Content writer" value="" />
                <p class="note">Tag keterampilan atau teknologi yang diperlukan, untuk pekerjaan ini.</p>
            </div>


            <!-- Description -->
            <div class="form">
                <h5>Deskripsi pekerjaan <span style="color: red">*</span></h5>
                <textarea class="WYSIWYG" name="deskripsi_jobs" cols="40" rows="3" id="deskripsi_jobs" spellcheck="true"></textarea>
            </div>

            <!-- Application email/url -->
            <div class="form">
                <h5>Penanggung Jawab <span style="color: red">*</span></h5>
                <input type="text" name="email_perusahaan" placeholder="Enter an email address or website URL">
            </div>
            
            <!-- Application email/url -->
            <div class="form">
                <h5>NIB Perusahaan <span style="color: red">*</span></h5>
                <input type="text" name="nib_perusahaan" placeholder="Enter an email address or website URL">
            </div>

            <!-- TClosing Date -->
            <div class="form">
                <input style="display: none" data-role="date" type="date"  id="date" class="date" name="jobs_dibuka" placeholder="yyyy-mm-dd" v >
                <script>document.getElementById("date").value = new Date().toJSON().slice(0,10)</script>
            </div>

            <div class="form">
                <h5>Tanggal di tutup <span style="color: red">*</span></h5>
                <input data-role="date" type="date" name="jobs_ditutup" placeholder="yyyy-mm-dd">
                <p class="note">Deadline for new applicants.</p>
            </div>

        

        
            <!-- Company Details -->
            <div class="divider">
                <h3>Detail Perusahaan</h3>
            </div>

            <!-- Company Name -->
            <div class="form">
                <h5>Nama Perusahaan <span style="color: red">*</span></h5>
                <input type="text" name="nama-perusahaan" placeholder="Enter the name of the company">
            </div>

            <!-- Website -->
            <div class="form">
                <h5>Website <span style="color: red">*</span></h5>
                <input type="text" name="website" placeholder="http://">
            </div>

            <!-- Teagline -->
            <div class="form">
                <h5>Tagline <span style="color: red">*</span></h5>
                <input type="text" name="tagline" placeholder="Jelaskan secara singkat perusahaan Anda">
            </div>

            <!-- Video -->
            <div class="form">
                <h5>Video <span>(optional)</span></h5>
                <input type="text" name="video" placeholder="Tautan ke video tentang perusahaan anda">
            </div>

            <!-- Twitter -->
            <div class="form">
                <h5>Akun Twitter <span>(optional)</span></h5>
                <input type="text" name="twitter" placeholder="@yourcompany">
            </div>

            <!-- Logo -->
            <div class="form">
                <h5>Logo <span style="color: red">*</span></h5>
                <label class="upload-btn">
                    <input type="file" name="logo" multiple />
                    <i class="fa fa-upload"></i> Browse
                </label>
                <span class="fake-input">No file selected</span>
            </div>
     

            <div class="divider margin-top-0"></div>
            <button class="button big margin-top-5" name="submit" value="submit">Preview<i class="fa fa-arrow-circle-right"></i></button>
        </form>
        
        </div>
    </div>

</div>

@endsection