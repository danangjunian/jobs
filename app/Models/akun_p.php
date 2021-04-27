<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class akun_p extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "akun_p";

    protected $primaryKey = "id";

    protected $fillable = [
        'nama_pendaftar', 'email_perusahaan', 'password',
    ];
    protected $guard = 'perusahaan';
}
