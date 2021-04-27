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
    use HasFactory;
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
<<<<<<< HEAD
    // protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';

    public function Jobs() {
        return $this->hasMany(AddJobs::class);
}
=======
    
    protected $primaryKey = 'id';

    public function AddJobs() {
        return $this->hasMany(AddJobs::class, );
        return $this->belongsTo(AddJobs::class, '');

      }
      
      
>>>>>>> 954eb2103b01caf4ffe3bc9ebb111013a6f8f43b


}
