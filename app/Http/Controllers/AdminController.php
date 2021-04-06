<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admininternal () {
    return view ('admin.admininternal');
}

public function dashboard () {
    return view ('admin.dashboard');
}

public function datauser () {
    return view ('admin.data_user');
}

public function dataperusahaan () {
    return view ('admin.data_perusahaan');
}
public function resumeperusahaan () {
    return view ('admin.resume_perusahaan');
}
public function resumepelamar () {
    return view ('admin.resume_pelamar');
}

public function blacklistpengguna () {
    return view ('admin.blacklist_pengguna');
}

public function blacklistresume () {
    return view ('admin.blacklist_resume');
}
public function admin () {
    return view ('admin.masteradmin');
}
public function adminedit () {
    return view ('admin.admin_edit');
}


}
