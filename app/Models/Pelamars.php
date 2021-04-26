<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamars extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table =  'pelamar';
    protected $filleble = [
    'namadepan', 
    'namabelakang', 
    'email', 
    'no_hp', 
    'alamat', 
    'pengalmankerja_id'
    ];
    protected $primaryKey = 'pelamar_id';
}
