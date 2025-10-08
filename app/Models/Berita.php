<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        'created_by',
    ];

    protected static function booted()
{
    static::creating(function ($berita) {
        if (Auth::check()) {
            $berita->created_by = Auth::user()->name;
        }
    });
}
}
