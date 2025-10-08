<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected $casts = [
        'is_tampil' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope untuk hanya mengambil berita yang ditampilkan
     */
    public function scopeTampil($query)
    {
        return $query->where('is_tampil', true);
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Accessor untuk mendapatkan URL gambar1
     */
    public function getGambar1UrlAttribute()
    {
        return $this->gambar1 ? route('berita.image', ['filename' => basename($this->gambar1)]) : asset('images/blog-default.png');
    }

    /**
     * Accessor untuk mendapatkan URL gambar2
     */
    public function getGambar2UrlAttribute()
    {
        return $this->gambar2 ? route('berita.image', ['filename' => basename($this->gambar2)]) : null;
    }

    /**
     * Accessor untuk mendapatkan URL gambar3
     */
    public function getGambar3UrlAttribute()
    {
        return $this->gambar3 ? route('berita.image', ['filename' => basename($this->gambar3)]) : null;
    }

    /**
     * Accessor untuk mendapatkan excerpt dari deskripsi
     */
    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->deskripsi), 150);
    }

    /**
     * Accessor untuk format tanggal yang lebih readable
     */
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d M, Y');
    }
}
