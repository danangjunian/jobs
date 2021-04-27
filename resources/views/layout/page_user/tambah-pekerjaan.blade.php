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

    <form action="/tambah/pekerjaan" method="post">
        {{ csrf_field() }}       
        <div class="form">
                <h5>Judul Pekerjaan <span style="color: red">*</span></h5>
                <input class="search-field" name="judul_jobs" type="text" placeholder="contoh 'crew store'" value="{{old('judul_jobs')}}" />
            </div>
            
            
            <div class="form">
                <h5>ID<span style="color: red">*</span></h5>
                <input class="search-field" name="master_id" type="text" placeholder="343" value="{{old ('master_id')}}" />
            </div>

            <!-- Location -->
            <div class="form">
                <h5>Lokasi <span style="color: red">*</span></h5>
                <input class="search-field" name="lokasi_jobs" type="text" placeholder="Contoh : Surabaya, Jawa Timur" value="{{old ('lokasi_jobs')}}" />
            </div>

            <!-- Job Type -->
            <div class="form">
                <h5>Tipe Pekerjaan <span style="color: red">*</span></h5>
                <select data-placeholder="Tipe Pekerjaan" name="tipekerja_id" class="chosen-select-no-single" multiple>
                    @foreach ($tipekerja as $item)
                        <option value="{{$item->id}}" {{ old('tipekerja_id') == $item->id ? 'selected' : null}}>{{$item->tipe_pekerjaan}}</option>
                    @endforeach
                </select>
            </div>


            <!-- Choose Category -->
            <div class="form">
                <div class="select">
                    <h5>Kategori <span style="color: red">*</span></h5>
                    <select data-placeholder="kategori pekerjaan" class="chosen-select" name="kategori_id" multiple>
                        @foreach ($kategori as $item)
                        <option value="{{$item->id}}" {{ old('kategori_id') == $item->id ? 'selected' : null}}>{{$item->kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Tags -->
            <div class="form">
                <div class="select">
                    <h5>Tag Pekerjaan <span style="color: red">*</span></h5>
                    <select data-placeholder="Coding, Program " class="chosen-select" name="tag_id" multiple>
                        @foreach ($tags as $item)
                        <option value="{{$item->id}}" {{ old('tag_id') == $item->id ? 'selected' : null}}>{{$item->tag}}</option>
                        @endforeach
                    </select>
                    <p class="note">Tag keterampilan atau teknologi yang diperlukan, untuk pekerjaan ini.</p>
                </div>
            </div>


            <!-- Description -->
            <div class="form">
                <h5>Deskripsi pekerjaan <span style="color: red">*</span></h5>
                <input class="search-field" name="deskripsi_jobs" type="text" placeholder="" value="{{ old('deskripsi_jobs') }}" />
            </div>

            {{-- <!-- Application email/url -->
            <div class="form">
                <h5>Penanggung Jawab <span style="color: red">*</span></h5>
                <input type="text" name="email_perusahaan" placeholder="Enter an your name">
            </div>
            
            <!-- Application email/url -->
            <div class="form">
                <h5>NIB Perusahaan <span style="color: red">*</span></h5>
                <input type="text" name="nib_perusahaan" placeholder="873267723">
            </div> --}}

            <!-- TClosing Date -->
            <div class="form">
                <input style="display: none" data-role="date" type="date"  id="date" class="date" name="jobs_dibuka" placeholder="yyyy-mm-dd" v >
                <script>document.getElementById("date").value = new Date().toJSON().slice(0,10)</script>
            </div>

            <div class="form">
                <h5>Tanggal di tutup <span style="color: red">*</span></h5>
                <input data-role="date" type="date" name="jobs_ditutup" placeholder="yyyy-mm-dd" value="{{old('jobs_ditutup')}}">
                <p class="note">Deadline for new applicants.</p>
            </div>

            <div class="divider margin-top-0"></div>
           <button class="button big margin-top-5" name="submit" value="submit">Kirim<i class="fa fa-arrow-circle-right"></i></button>
        </form>
        
        </div>
    </div>

</div>

@endsection