@extends('admin.masteradmin')
@section('header', 'Tambah Admin Pengelola')
    @section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Lihat Data Menurut Tanggal</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                  <label for="exampleInputDate"><strong class="text-primary"> Tanggal Mulai </strong></label>
                  <input type="date" class="form-control" name="tglawal" id="tglawal">
                </div>
                <div class="form-group">
                  <label for="exampleInputDate"> <strong class="text-primary">Tanggal Akhir</strong> </label>
                  <input type="date" class="form-control" name="tglakhir" id="tglakhir" >
                </div>
                <a href="" onclick="this.href='/cetak/pertanggalan/'+ document.getElementById('tglawal').value + '/' 
                + document.getElementById('tglakhir').value" target="_blank" class="btn btn-primary btn-lg btn-block"> Lihat Data & Cetak</a>
              </form>
        </div>
    </div>

    

    @endsection