<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pendidikan';
    protected $filleble = [
        'nama_sekeolah',
        'kualifikasi',
        'tahun_mulai', 
        'tahun_lulus',
        'keterangan'
    ];
    protected $primaryKey = 'id';
}
