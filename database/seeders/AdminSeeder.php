<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admins;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin = Admins::create([
           'nama_admin' => 'danang',
           'email_admin' => 'danang@gmail.com',
           'no_hp_admin' => '081331414044',
           'password' => bcrypt('danang'),
       ]);

       $admin->assignRole('Admin');



       $user = Admins::create([
           'nama_admin' => 'User',
           'email_admin' => 'user@gmail.com',
           'no_hp_admin' => '081331414040',
           'password' => bcrypt('user'),
       ]);

       $user->assignRole('User');



       $perusahaan = Admins::create([
           'nama_admin' => 'Perusahaan',
           'email_admin' => 'perusahaan@gmail.com',
           'no_hp_admin' => '081331414049',
           'password' => bcrypt('perusahaan'),
       ]);

       $perusahaan->assignRole('Master');


    }
}
