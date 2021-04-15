<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Accpelamars extends Authenticatable
{
    use HasFactory,  Notifiable;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "account_pelamar";
    protected $fillable = [
        'nama_pelamar',
        'email_pelamar',
        'no_hp_pelamar',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
