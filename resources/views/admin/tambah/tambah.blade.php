@extends('admin.masteradmin')
@section('header', 'Update Data Di Databese')
    @section('content')

    


      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="#">Tambah Data</a></h6>
        </div>
        <div class="card-body">
            <div>
              
              
                <div class="card-body">
                  @if(session('errors'))
                          <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                          </ul>
                  @endif
                </div>
                <form method="POST" action="{{ route('tambah.kategori') }}">
                  @csrf
                    <div class="form-row align-items-center">
                      <div class="col-sm-3 my-1">
                        <input type="text" name="kategori" class="form-control" id="inlineFormInputName" placeholder="Tambah Kategori">
                            </div>
                          <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                  <hr>
                  <form method="POST" action="{{ Route('tambah.tags') }}">
                    @csrf
                    <div class="form-row align-items-center">
                      <div class="col-sm-3 my-1">
                        <input type="text" class="form-control" id="inlineFormInputName" name="tag" placeholder="Tambah Tags">
                            </div>
                          <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                  <hr>
                  <form method="POST" action="{{ Route('tambah.kerja') }}">
                    @csrf
                    <div class="form-row align-items-center">
                      <div class="col-sm-3 my-1">
                        <input type="text" class="form-control" id="inlineFormInputName" name="tipe_pekerjaan" placeholder="Tambah Tipe Pekerjaan">
                            </div>
                          <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                  <hr>
                  <form action="">
                  <div class="form-row align-items-center">
                      <div class="col-sm-3 my-1">
                        <input type="text" class="form-control" id="inlineFormInputName" placeholder="Tambah Jumlah Gaji">
                            </div>
                          <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                <hr>
                  <div class="form-row align-items-center">
                      <div class="col-sm-3 my-1">
                        <input type="text" class="form-control" id="inlineFormInputName" placeholder="Tambah Skill">
                            </div>
                          <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                <hr>
                  <div class="form-row align-items-center">
                      <div class="col-sm-3 my-1">
                        <input type="text" class="form-control" id="inlineFormInputName" placeholder="Tambah Pendidikan">
                            </div>
                          <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                <hr>

    @endsection