@extends('admin.masteradmin')
@section('content')
@section('header', 'Perusahaan')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="#">Resume Perusahaan</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID Perusahaan</th>
                        <th>Nama Perusahaan</th>
                        <th>Nama Pendaftar</th>
                        <th>Email Perusahaan</th>
                        <th>Alamat Perusahaan</th>
                        <th>Nomor telepon/hp Perusahaan</th>
                        <th>Website Perusahaan</th>
                        <th>NIB</th>
                        <th>Penanggung Jawab / HRD</th>
                        <th colspan="3" style="text-align: center"><strong>Options</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1 ?>
                    @foreach($MasterJobs as $master)
                    
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $master->id }}</td>
                        <td>{{ $truncated = Str::limit($master->nama_perusahaan) }}</td>
                        <td>{{ $truncated = Str::limit($master->nama_pendafatar) }}</td>
                        <td>{{ $truncated = Str::limit($master->email_perusahaan) }}</td>
                        <td>{{ $truncated = Str::limit($master->alamat_perusahaan, 10) }}</td>
                        <td>{{ $truncated = Str::limit($master->nomor_hp_perusahaan) }}</td>
                        <td>{{ $truncated = Str::limit($master->webste_perusahaan) }}</td>
                        <td>{{ $truncated = Str::limit($master->nib_perusahaan)	 }}</td>
                        <td>{{ $truncated = Str::limit($master->penaggung_jawab) }}</td>
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