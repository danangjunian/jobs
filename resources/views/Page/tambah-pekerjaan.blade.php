@extends('layout.master2')

@section('title', 'Tambah-pekerjaan')



<!-- Header === -->

<!-- Content=== -->

@section('content')

<div class="container">

    <!-- Submit Page -->
    <div class="sixteen columns">
        <div class="submit-page">

    <!-- Notice -->
            <div class="notification notice closeable margin-bottom-40">
                <p><span>Belum punya akun?</span> Jika Anda tidak memiliki akun, Anda dapat membuatnya di bawah dengan memasukkan alamat email Anda.
                    Sebuah kata sandi akan secara otomatis dikirimkan ke email Anda.</p>
            </div>


    <!-- Email -->
            <div class="form">
                <h5>Email</h5>
                <input class="search-field" name="email" type="text" placeholder="abc@example.com" value="" />
            </div>

    <!-- Title -->
            <div class="form">
                <h5>Judul Pekerjaan</h5>
                <input class="search-field" name="judul-pekerjaan" type="text" placeholder="contoh 'crew store'" value="" />
            </div>

            <!-- Location -->
            <div class="form">
                <h5>Lokasi <span>(opsional)</span></h5>
                <input class="search-field" name="lokasi" type="text" placeholder="contoh. Surabaya" value="" />
                <p class="note">Biarkan kosong jika lokasinya tidak penting</p>
            </div>

            <!-- Job Type -->
            <div class="form">
                <h5>Tipe Pekerjaan</h5>
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
                    <h5>Kategori</h5>
                    <select data-placeholder="kategori pekerjaan" class="chosen-select" name="kategori" multiple>
                        <option value="1">Web Developers</option>
                        <option value="2">Mobile Developers</option>
                        <option value="3">Designers & Creatives</option>
                        <option value="4">Writers</option>
                        <option value="5">Virtual Assistants</option>
                        <option value="6">Customer Service Agents</option>
                        <option value="7">Sales & Marketing Experts</option>
                        <option value="8">Accountants & Consultants</option>
                    </select>
                </div>
            </div>

            <!-- Tags -->
            <div class="form">
                <h5>Tag Pekerjaan <span>(optional)</span></h5>
                <input class="search-field" type="text" name="tag-pekerjaan" placeholder="e.g. PHP, Social Media, Management, Content writer" value="" />
                <p class="note">Tag keterampilan atau teknologi yang diperlukan, untuk pekerjaan ini.</p>
            </div>


            <!-- Description -->
            <div class="form">
                <h5>Deskripsi pekerjaan</h5>
                <textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
            </div>

            <!-- Application email/url -->
            <div class="form">
                <h5>Email Perusahaan / URL</h5>
                <input type="text" name="email-perusahaan" placeholder="Enter an email address or website URL">
            </div>

            <!-- TClosing Date -->
            <div class="form">
                <h5>Tanggal di tutup <span>(optional)</span></h5>
                <input data-role="date" type="text" name="tanggal-tutup" placeholder="yyyy-mm-dd" value="contoh : 2021-07-21">
                <p class="note">Deadline for new applicants.</p>
            </div>


            <!-- Company Details -->
            <div class="divider">
                <h3>Detail Perusahaan</h3>
            </div>

            <!-- Company Name -->
            <div class="form">
                <h5>Nama Perusahaan</h5>
                <input type="text" name="nama-perusahaan" placeholder="Enter the name of the company">
            </div>

            <!-- Website -->
            <div class="form">
                <h5>Website <span>(optional)</span></h5>
                <input type="text" name="website" placeholder="http://">
            </div>

            <!-- Teagline -->
            <div class="form">
                <h5>Tagline <span>(optional)</span></h5>
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
                <h5>Logo <span>(optional)</span></h5>
                <label class="upload-btn">
                    <input type="file" name="logo" multiple />
                    <i class="fa fa-upload"></i> Browse
                </label>
                <span class="fake-input">No file selected</span>
            </div>


            <div class="divider margin-top-0"></div>
            <a href="#" class="button big margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>


        </div>
    </div>

</div>

@endsection