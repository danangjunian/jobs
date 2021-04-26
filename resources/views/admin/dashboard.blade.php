@extends('admin.masteradmin')

@section('content')
    
<div class="row">
    @section('header', 'Dashboard')

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Perusahaan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahperusahaan }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-child fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            JOBS </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahjobs }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-building fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Pelamar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dumpster fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jobs Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

    <h1 class="h3 mb-2 text-gray-800">Pelamar</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="#">Data Resume Pelamar</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Pelamar</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Nomor Hp</th>
                            <th style="display: none">Tanggal Lahir</th>
                            <th style="display: none">Pendidikan Terakhir</th>
                            <th style="display: none">Background Pendidikan</th>
                            <th style="display: none">Pengalaman Kerja</th>
                            <th style="display: none">Skill</th>
                            <th style="display: none">Refrensi</th>
                            <th>Resume</th>
                            <th colspan="3" style="text-align: center"><strong>Options</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            {{-- <td>34234</td>
                            <td>Danang Junian Widodo</td>
                            <td><a href="https://mail.google.com/mail/u/0/?tab=wm&pli=1#inbox?compose=new">Danangjunianwidodo99@gmail.com</a></td>
                            <td>lamongan, indonesia, sendangaagung</td>
                            <td>+6281331414048</td>
                            <td style="display: none">1888-21-12</td>
                            <th style="display: none">SMA</th>
                            <td style="display: none">IPA</td>
                            <td style="display: none">Wordpress</td>
                            <td style="display: none">CSS, JAVA</td>
                            <td style="display: none">081636257762</td>
                            <td><a href="#">aaaaa</a></td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <span class="text">Check</span>
                                </a>
                            </td>
                                
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Blacklist</span>
                                </a>
                            </td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <hr>

    <h1 class="h3 mb-2 text-gray-800">Perusahaan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="#">Request Resume Perusahaan</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Jobs</th>
                            <th>Nama Perusahaan</th>
                            <th>Email Perusahaan</th>
                            <th>Kategori Pekerjaan</th>
                            <th>Judul Lowongan</th>
                            <th style="display: none">Lokasi Pekerjaan</th>
                            <th style="display: none">Deskripsi Pekerjaan</th>
                            <th style="display: none">Tipe Lowongan</th>
                            <th style="display: none">Tipe Pekerjaan</th>
                            <th style="display: none">Gaji Pekerjaan </th>
                            <th>Tanggal Dibuka Lowongan</th>
                            <th>Tanggal Dittutup Lowongan</th>
                            <th colspan="3" style="text-align: center"><strong>Options</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($data as $Rp)
                        <tr>
                            <td scope="row"> {{$loop->iteration}}.</td>
                            <td>{{ $Rp->jobs_id }}</td>
                            <td>{{ $Rp->nama_perusahaan }}</td>
                            <td>{{ $Rp->email_perusahaan }}</td>
                            <td>{{ $Rp->kategori }}</td>
                            <td>{{ $Rp->judul_jobs }}</td>
                            <td style="display: none"></td>
                            <td style="display: none"></td>
                            <td style="display: none"></td>
                            <td style="display: none"></td>
                            <td style="display: none"></td>
                            <td class="text-primary">{{ $Rp->jobs_dibuka }}</td>
                            <td class="text-danger">{{ $Rp->jobs_ditutup }}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <span class="text">Check</span>
                                </a>
                            </td>
                                <td>
                                    <a href="#" class="btn btn-success btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Approve</span>
                                    </a>
                                </td>
                             <td>
                                <a href="/blacklist/resume/perusahaan/{{ $Rp->jobs_id }}" class="btn btn-danger btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Blacklist</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              
                    <div class="d-flex justify-content-center">
                            {!! $data->links() !!}</div>
            </div>
        </div>
    </div>
    <hr> 
    @include('sweetalert::alert')

@endsection
