@extends('admin.masteradmin')
@section('content')
@section('header', 'Resume Perusahaan')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="#">Resume Perusahaan</a></h6>
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
                        <th colspan="2">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>32313</td>
                        <td>MediaTek Corp</td>
                        <td>jhon@mediatek.com</td>
                        <td>SEO Content</td>
                        <th>Freelance</th>
                        <td>Jakarta</td>
                        <td>System Architect</td>
                        <td>WEB Development</td>
                        <td>01-03-2012</td>
                        <td><a href="#" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                        </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                 <i class="fas fas fa-eye"></i>
                                     </a>

                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection