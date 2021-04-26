<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\AddJobs;
use App\Models\Tag;

class MasterJobs extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'master_jobs';
    protected $filleble = [
        'nama_perusahaan',
        'nama_pendafatar',
        'email_perusahaan',
        'nomor_hp_perusahaan',
        'alamat_perusahaan',
        'webste_perusahaan',
        'nib_perusahaan',
        'penaggung_jawab',
    ];
    
    protected $primaryKey = 'id';

    public function AddJobs() {
        return $this->hasMany(AddJobs::class, );
        return $this->belongsTo(AddJobs::class, '');

      }
      
      

      

}
