<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\DocBlock\Tag;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddJobs extends Model
{
   
       use HasFactory,  Notifiable, SoftDeletes;
         /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $primaryKey = 'jobs_id';
        protected $table = 'add_jobs';
        protected $fillable = [
            'judul_jobs',
            'lokasi_jobs',
            'tag_jobs',
            'deskripsi_jobs',
            'jobs_dibuka',
            'jobs_ditutup',
            'master_id',
            'tipekerja_id',
            'tag_id',
            'kategori_id',
           
        ];

        public function alldata()
        {
          return DB::table('add_jobs')
          ->Join('master_jobs','master_jobs.id','=','add_jobs.master_id')
          ->Join('tipe_kerja','tipe_kerja.id','=','add_jobs.tipekerja_id')
          ->Join('kategori_kerja','kategori_kerja.id','=','add_jobs.kategori_id')
          ->select('add_jobs.jobs_id','add_jobs.judul_jobs','add_jobs.lokasi_jobs','add_jobs.deskripsi_jobs','add_jobs.jobs_dibuka','add_jobs.jobs_ditutup','master_jobs.id','master_jobs.nama_perusahaan','master_jobs.email_perusahaan','master_jobs.webste_perusahaan','tipe_kerja.id','tipe_kerja.tipe_pekerjaan','kategori_kerja.id','kategori_kerja.kategori')
          ->get();
        }

      
        public function MasterJobs() {
          return $this->belongsTo(MasterJobs::class);
        }

        public function tipekerja() {
          return $this->belongsTo(TipeKerja::class);
        }

        public function tags()
        {
            return $this->belongsTo(Tag::class);
        }
        
        public function kategoris()
        {
            return $this->belongsTo(kategori::class);
        }

        
        /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

  ];

  
    
       
}
