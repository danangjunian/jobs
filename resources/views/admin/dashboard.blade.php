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
                            SEEKERS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">23</div>
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
                            EMPLOYERS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
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
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            JOBS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
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
                            JOBS Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
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

    <h1 class="h3 mb-2 text-gray-800">Resume Perusahaan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="#">Data Resume Perusahaan</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Lokasi Perusahaan</th>
                            <th>Judul Lowongan</th>
                            <th>Tipe Pekerjaan</th>
                            <th colspan="2">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td><a href="#" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                        </a>
                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                     <i class="fas fa-eye"></i>
                                         </a>

                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <hr>

    <h1 class="h3 mb-2 text-gray-800">Resume Pelamar</h1>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Keahlian</th>
                            <th>Lokasi</th>
                            <th colspan="2">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td><a href="#" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                        </a>
                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                     <i class="fas fa-eye"></i>
                                         </a>

                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
    <hr>


<h1 class="h3 mb-2 text-gray-800">User</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="#">Data User Account</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th colspan="2">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
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
<hr>

    <h1 class="h3 mb-2 text-gray-800">Perusahaan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="#">Data Perusahaan Account</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th colspan="2">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
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