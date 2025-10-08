<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    use HasFactory;

    protected $table = 'slideshow';

    protected $fillable = [
        'gambar',
        'is_tampil',
        'urutan',
    ];

    protected $appends = ['gambar_url'];

    public function scopeTampil($query)
    {
        return $query->where('is_tampil', true);
    }

    /**
     * Get the URL for the slideshow image
     */
    public function getGambarUrlAttribute()
{
    if ($this->gambar) {
        // Jika format "slideshow/nama-file.jpg", ambil hanya nama file-nya
        $filename = $this->gambar;
        if (str_contains($filename, 'slideshow/')) {
            $filename = str_replace('slideshow/', '', $filename);
        }
        return route('slideshow.image', ['filename' => $filename]);
    }
    
    // Fallback image jika tidak ada gambar
    return asset('images/placeholder-slideshow.jpg');
}
}