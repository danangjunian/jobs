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
                        <th>ID Perusahaan</th>
                        <th>Nama Perusahaan</th>
                        <th>Email Perusahaan</th>
                        <th>Kategori Pekerjaan</th>
                        <th>Judul Lowongan</th>
                        <th>Lokasi Pekerjaan</th>
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
                    <tr>
                        <td>32313</td>
                        <td>MediaTek Corp</td>
                        <td>jhon@mediatek.com</td>
                        <td>Programmer</td>
                        <td>mencari programmer php</td>
                        <td>jakarta</td>
                        <td style="display: none">yang serius</td>
                        <td style="display: none">freelance</td>
                        <td style="display: none">expert</td>
                        <td style="display: none">$1000</td>
                        <td>30-02-2012</td>
                        <td>01-03-2012</td>
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

@endsection