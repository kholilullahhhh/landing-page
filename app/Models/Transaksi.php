<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'pendaftar_id',
        'materi_id',
        'harga',
        'status',
        'snap_token',
    ];

    public function pendaftar(){
        return $this->belongsTo((Pendaftar::class));
    }
    public function materi(){
        return $this->belongsTo((Materi::class));
    }
}
