<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\DocBlock\Tag;

class AddJobs extends Model
{
   
       use HasFactory,  Notifiable;
         /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $table = "add_jobs";
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
           
        ];

        protected $primaryKey = 'id';

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

        // public function joinresume() {
        //   return DB::table('add_jobs')
        //   ->leftjoin('master_jobs', 'add_jobs.master_id', '=', 'master_jobs.id')
        //   ->leftjoin('tipe_kerja', 'add_jobs.tipekerja_id', '=', 'tipe_kerja.id')
        //   ->leftjoin('kategori_kerja', 'add_jobs.kategori_id', '=', 'kategori_kerja.id')
          
        //   ->get();
        // }

        /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

  ];

  
    
       
}
