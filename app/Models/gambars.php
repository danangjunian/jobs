<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AddJobs;

class gambars extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'gambar';
    protected $fillable = [
        'gambar',
        
    
    ];

    public function gambar() {
        return $this->hasMany(AddJobs::class);
    }

}
