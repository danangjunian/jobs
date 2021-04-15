<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class Admins extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "admins";
    protected $fillable = [
        'nama_admin',
        'email_admin',
        'no_hp_admin',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        
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
