@extends('admin.masteradmin')
@section('content')
@section('header', 'Resume Pelamar')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="#">Resume Data Pelamar</a></h6>
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
                        <th>Pendidikan Terakhir</th>
                        <th>Background Pendidikan</th>
                        <th>Pengalaman Kerja</th>
                        <th>Skill</th>
                        <th>Refrensi</th>
                        <th>Resume</th>
                        
                        <th colspan="2">Options</th>
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
                        <th>SMA</th>
                        <td>IPA</td>
                        <td>Wordpress</td>
                        <td>CSS, JAVA</td>
                        <td>081636257762</td>
                        <td><a href="#">aaaaa</a></td>
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