<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin () {
    return view ('admin.dashboard');
}

    public function admin_data_perusahaan () {
    return view ('admin.data_perusahaan');
}    

    public function admin_data_user () {
    return view ('admin.data_user');
}

    public function admin_resume_pelamar () {
    return view ('admin.resume_pelamar');
}

    public function admin_resume_perusahaan () {
    return view ('admin.resume_perusahaan');
}

    public function admin_blacklist_resume () {
    return view ('admin.blacklist_resume');
}

    public function admin_blacklist_pengguna () {
    return view ('admin.blacklist_pengguna');
}

    public function admin_edit () {
    return view ('admin.admin_edit');
}

    public function profile_admin () {
    return view ('admin.admininternal');
}





}
