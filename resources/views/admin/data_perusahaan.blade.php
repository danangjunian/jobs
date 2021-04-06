@extends('admin.masteradmin')
@section('content')
@section('header', 'Data Perusahaan')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="#">Data Perusahaan Account</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Perusahaan</th>
                        <th>Nama Perusahaan</th>
                        <th>E-mail</th>
                        <th>Nomor Hp</th>
                        <th>Password</th>
                        <th colspan="2">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <th>Password</th>
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