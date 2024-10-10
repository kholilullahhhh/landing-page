<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $fillable = [
        'materi_id',
        'nama',
        'no_hp',
        'jkl',
        'alamat',
        'status',
        'jurusan'
    ];
    
    public function materi(){
        return $this->belongsTo((Materi::class));
    }
    
}
