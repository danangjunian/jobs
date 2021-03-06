<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AddJobs;

class Tag extends Model
{
    use HasFactory;

    protected $filleble = ['tag'];
    protected $table = 'tag';
    protected $primaryKey = 'id';
      

    public function tags() {
        return $this->hasMany(AddJobs::class);
      }

    
}
