<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'images',
        'content',
        'sinopsis',
    
];
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    // public function blogs() {
    //     return $this->hasMany(AddJobs::class);
    // }
}
