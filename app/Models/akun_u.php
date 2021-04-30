<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class akun_u extends Authenticatable
{
    use HasFactory, Notifiable; 
    protected $table = "akun_u";

    protected $primaryKey = "id";

    protected $fillable = [
        'nama_pelamar', 'email_pelamar', 'password',
    ];
    protected $guard = 'pelamar';
}
