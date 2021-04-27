@extends('admin.masteradmin')
@section('header', 'Tambah Admin Pengelola')
    @section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><strong>Tambah Admin</strong></h1>
                        </div>
                        <div class="card-body">
                            @if(session('errors'))
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                            @endif
                        <form method="POST" action="{{ route('tambah.admin') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="nama_admin" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Nama Lengkap">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="no_hp_admin" class="form-control form-control-user" id="exampleLastPhone"
                                        placeholder="Nomor Telephone">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email_admin" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword"
                                    placeholder="Password">
                            </div>
                           
                            <button class="btn btn-primary btn-user btn-block" type="submit" class="button" name="signup"> Daftar Admin Baru</button>
                            </a>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')

    @endsection