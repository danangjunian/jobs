@extends('admin.masteradmin')
@section('content')
@section('header', 'Blacklist Resume Pelamar & Perusahaan')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="#">Blacklist Resume Pelamar</a></h6>
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
                        <th>Tanggal Lahir</th>
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
                        <td>34234</td>
                        <td>Danang Junian Widodo</td>
                        <td><a href="https://mail.google.com/mail/u/0/?tab=wm&pli=1#inbox?compose=new">Danangjunianwidodo99@gmail.com</a></td>
                        <td>lamongan, indonesia, sendangaagung</td>
                        <td>+6281331414048</td>
                        <td>1888-21-12</td>
                        <th style="display: none">SMA</th>
                        <td style="display: none">IPA</td>
                        <td style="display: none">Wordpress</td>
                        <td style="display: none">CSS, JAVA</td>
                        <td style="display: none">081636257762</td>
                        <td><a href="#">aaaaa</a></td>
                        <td>
                            <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                        </td>
                            <td>
                                <a href="#" class="btn btn-success btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-undo"></i>
                                    </span>
                                    <span class="text">Retrun</span>
                                </a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Trash</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="#">Blacklist Resume Perusahaan</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Jobs</th>
                        <th>ID Perusahaan </th>
                        <th>Kategori Pekerjaan</th>
                        <th>Judul Lowongan</th>
                        <th>Lokasi Pekerjaan</th>
                        <th>Deskripsi Pekerjaan</th>
                        <th style="display: none">Tipe Lowongan</th>
                        <th style="display: none">Tipe Pekerjaan</th>
                        <th style="display: none">Gaji Pekerjaan </th>
                        <th>Tanggal Dibuka Lowongan</th>
                        <th>Tanggal Dittutup Lowongan</th>
                        <th colspan="3" style="text-align: center"><strong>Options</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resumeblacklist as $delete)

                    <tr>
                        <td>{{ $delete->jobs_id }}</td>
                        <td>{{ $delete->master_id }}</td>
                        <td>{{ $delete->kategori_id }}</td>
                        <td>{{ $delete->judul_jobs }}</td>
                        <td>{{ $delete->lokasi_jobs }}</td>
                        <td>{{ $truncated = Str::limit($delete->deskripsi_jobs, 10)  }}</td>
                        <td style="display: none">freelance</td>
                        <td style="display: none">expert</td>
                        <td style="display: none">$1000</td>
                        <td>{{ $delete->jobs_dibuka }}</td>
                        <td>{{ $delete->jobs_ditutup }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                        </td>
                            <td>
                                <a href="/resume/restore/{{ $delete->jobs_id }}" class="btn btn-success btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-undo"></i>
                                    </span>
                                    <span class="text">Retrun</span>
                                </a>
                        </td>
                        <td>
                            <a href="/resume/delete/{{ $delete->jobs_id }}" class="btn btn-danger btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Trash</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="#">Blacklist Resume Perusahaan</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Perusahaan</th>
                        <th>Nama Perusahaan </th>
                        <th>Nama Pendaftar</th>
                        <th>Email Perusahaan</th>
                        <th>Nomor Tlpon Perusahaan</th>
                        <th>Website Perusahaan</th>
                        <th>Alamat Perusahaan</th>
                        <th>NIB Perusahaan</th>
                        <th>Penanggung Jawab</th>
                        <th colspan="3" style="text-align: center"><strong>Options</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masterdata as $mdelete)

                    <tr>
                        <td>{{ $mdelete->id }}</td>
                        <td>{{ $mdelete->nama_perusahaan }}</td>
                        <td>{{ $mdelete->nama_pendafatar }}</td>
                        <td>{{ $mdelete->email_perusahaan }}</td>
                        <td>{{ $mdelete->nomor_hp_perusahaan }}</td>
                        <td>{{ $truncated = Str::limit($mdelete->alamat_perusahaan)  }}</td>
                        <td>{{ $mdelete->webste_perusahaan }}</td>
                        <td>{{ $mdelete->nib_perusahaan }}</td>
                        <td>{{ $mdelete->penaggung_jawab }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                        </td>
                            <td>
                                <a href="/master/restore/{{ $mdelete->id }}" class="btn btn-success btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-undo"></i>
                                    </span>
                                    <span class="text">Retrun</span>
                                </a>
                        </td>
                        <td>
                            <a href="/master/delete/{{ $mdelete->id }}" class="btn btn-danger btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Trash</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection