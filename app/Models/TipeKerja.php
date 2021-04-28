<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKerja extends Model
{
    use HasFactory;

    protected $filleble = ['tipe_pekerjaan'];
    protected $table = 'tipe_kerja';
    protected $primaryKey = 'id';

    public function tipekerja() {
        return $this->hasMany(AddJobs::class);
      }
}
