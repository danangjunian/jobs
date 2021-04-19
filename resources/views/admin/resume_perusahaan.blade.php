@extends('admin.masteradmin')
@section('content')
@section('header', 'Resume Perusahaan')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="#">Resume JOBS Perusahaan</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> no </th>
                        <th>ID Perusahaan</th>
                        <th>ID Jobs</th>
                        <th>Nama Perusahaan</th>
                        <th>Email Perusahaan</th>
                        <th>Judul Lowongan</th>
                        <th>Lokasi Pekerjaan</th>
                        <th>Deskripsi Pekerjaan</th>
                        <th>Tipe Pekerjaan</th>
                        <th>Kategori Pekerjaan</th>
                        <th>Gaji Pekerjaan </th>
                        <th>Tanggal Dibuka Lowongan</th>
                        <th>Tanggal Dittutup Lowongan</th>
                        <th colspan="3" style="text-align: center"><strong>Options</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1 ?>
                    @foreach($resume as $Rp)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $Rp->master_id }}</td>
                        <td>{{ $Rp->tipekerja_id }}</td>
                        <td>{{ $Rp->nama_perusahaan }}</td>
                        <td>{{ $Rp->email_perusahaan }}</td>
                        <td>{{ $Rp->judul_jobs }}</td>
                        <td>{{ $Rp->lokasi_jobs }}</td>
                        <td>{{ $truncated = Str::limit($Rp->deskripsi_jobs, 10) }}</td>
                        <td>{{ $Rp->tipe_pekerjaan }}</td>
                        <td>{{ $Rp->kategori }}</td>
                        <td>rewrew</td>
                        <td>{{ $Rp->jobs_dibuka }}</td>
                        <td>{{ $Rp->jobs_ditutup }}</td>
                        <td>
                            <fieldset disabled>
                            <a href="#" class="btn btn-warning btn-icon-split btn-sm" >
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">PUBLISH</span>
                            </a>
                        </fieldset>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-icon-split btn-sm" >
                                <span class="icon text-white-50">
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="text">Lihat</span>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection