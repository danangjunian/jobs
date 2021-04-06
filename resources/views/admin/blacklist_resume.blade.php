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
                        <th>Pendidikan Terakhir</th>
                        <th>Background Pendidikan</th>
                        <th>Pengalaman Kerja</th>
                        <th>Skill</th>
                        <th>Refrensi</th>
                        <th>Resume</th>
                        
                        <th colspan="2">Options</th>
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
                        <th>SMA</th>
                        <td>IPA</td>
                        <td>Wordpress</td>
                        <td>CSS, JAVA</td>
                        <td>081636257762</td>
                        <td><a href="#">aaaaa</a></td>
                        <td><a href="#" class="btn btn-primary btn-circle btn-sm"  title="Edit">
                            <i class="fas fa-pencil-alt"></i>
                                </a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm"  title="Hapus Selamanya">
                             <i class="fas fa-trash"></i>
                                 </a>
                        <a href="#" class="btn btn-success btn-circle btn-sm" title="Retrun">
                             <i class="fas fa-undo"></i>
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
                        <th>ID Perusahaan</th>
                        <th>Nama Perusahaan</th>
                        <th>Email Perusahaan</th>
                        <th>Tipe Perusahaan</th>
                        <th>Judul Lowongan</th>
                        <th>Jobs Pekerjaan</th>
                        <th>Lokasi Pekerjaan</th>
                        <th>Kategori Pekerjaan</th>
                        <th>Tanggal Dittutup Lowongan</th>
                        <th colspan="3">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>32313</td>
                        <td>MediaTek Corp</td>
                        <td><a href="#">jhon@mediatek.com</a></td>
                        <td>SEO Content</td>
                        <th>Freelance</th>
                        <td>Jakarta</td>
                        <td>System Architect</td>
                        <td>WEB Development</td>
                        <td>01-03-2012</td>
                        <td><a href="#" class="btn btn-primary btn-circle btn-sm"  title="Edit">
                            <i class="fas fa-pencil-alt"></i>
                                </a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm"  title="Hapus Selamanya">
                             <i class="fas fa-trash"></i>
                                 </a>
                        <a href="#" class="btn btn-success btn-circle btn-sm" title="Retrun">
                             <i class="fas fa-undo"></i>
                                 </a>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection