<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = "alat";
    protected $primaryKey = "kd_alat";
    protected $fillable = [
        'kd_alat', 'nm_alat', 'harga', 'stok', 'gambar',
    ];
}