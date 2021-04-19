<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $filleble = ['ketegori'];
    protected $table = 'kategori_kerja';
    protected $primaryKey = 'id';
      
    public function kategoris() {
        return $this->hasMany(kategori::class);
      }
   

      
}
