<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartgardenAgro extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'subjudul',
        'subdeskripsi',
        'gambarproduk1',
        'namaproduk1',
        'deskripsiproduk1',
        'gambarproduk2',
        'namaproduk2',
        'deskripsiproduk2',
        'gambarproduk3',
        'namaproduk3',
        'deskripsiproduk3',
    ];
}
