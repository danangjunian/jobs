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
                        <th>ID Perusahaan</th>
                        <th>Nama Pendaftar</th>
                        <th>Nama Perusahaan</th>
                        <th>Email Perusahaan</th>
                        <th>Alamat Perusahaan</th>
                        <th>Nomor telepon/hp Perusahaan</th>
                        <th>Deskripsi Perusahaan</th>
                        <th>Website Perusahaan</th>
                        <th>Tipe Perusahaan</th>
                        <th>NIB</th>
                        <th>Penanggung Jawab / HRD</th>
                        <th colspan="3" style="text-align: center"><strong>Options</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>32313</td>
                        <td>Setiawan JOdi .SPD. IR</td>
                        <td>lawang corp</td>
                        <td>jhon@js.com </td>
                        <td>Jakarta, kebayoran baru jakarta pusat nomor 15 jln simpang lima</td>
                        {{-- <td>{{str_limit($biodata ->description, $limit = 20, $end = '...')}}</td> --}}
                        <td>0824442535663</td>
                        <td>Membangun negri tanpa kemajuan</td>
                        <td>John.com</td>
                        <td>74632764327</td>
                        <td>Teknologi</td>
                        <td>jodi src</td>
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
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection