<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'website',
        'email',
        'tentang',
        'skill',
        'medsos',
        'sd',
        'smp',
        'sma',
        's1',
        'tahun_sd',
        'tahun_smp',
        'tahun_sma',
        'tahun_s1',
        'ipk',
        'tahun_kerja',
        'perusahaan',
        'jabatan',

    
];
    protected $table = 'cvs';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
