<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerjas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pengalaman_kerja';
    protected $filleble = [''];
    protected $primaryKey = 'id';
}
