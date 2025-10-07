<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'slug',
        'judul',
        'deskripsi',
        'kota',
        'gambar1',
        'gambar2',
        'gambar3',
        'is_tampil',
    ];
}
