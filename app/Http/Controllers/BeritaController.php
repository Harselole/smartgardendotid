<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the news.
     */
    public function index(Request $request)
    {
        // Ambil slideshow aktif, diurutkan berdasarkan kolom urutan
        $slideshows = Slideshow::tampil()
            ->orderBy('urutan', 'asc')
            ->get();

        // DEBUG: Uncomment baris ini untuk cek data
        // dd($slideshows->toArray());
        // dd($slideshows->count(), $slideshows);

        // Mengambil berita yang is_tampil = true, diurutkan dari yang terbaru
        // dengan pagination 9 item per halaman
        $beritas = Berita::tampil()
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('news', compact('beritas', 'slideshows'));
    }

    /**
     * Display the specified news detail.
     */
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)
            ->where('is_tampil', true)
            ->firstOrFail();

        // Berita terkait (dari kota yang sama atau berita terbaru lainnya)
        $relatedBeritas = Berita::tampil()
            ->where('id', '!=', $berita->id)
            ->where(function($query) use ($berita) {
                $query->where('kota', $berita->kota)
                      ->orWhereNotNull('kota');
            })
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('news_detail', compact('berita', 'relatedBeritas'));
    }

    /**
     * Search news by keyword
     */
    public function search(Request $request)
    {
        $keyword = $request->input('q');
        
        $slideshows = Slideshow::tampil()
            ->orderBy('urutan', 'asc')
            ->get();

        $beritas = Berita::tampil()
            ->where(function($query) use ($keyword) {
                $query->where('judul', 'like', "%{$keyword}%")
                      ->orWhere('deskripsi', 'like', "%{$keyword}%")
                      ->orWhere('kota', 'like', "%{$keyword}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('news', compact('beritas', 'slideshows', 'keyword'));
    }

    /**
     * Filter news by city
     */
    public function byCity($kota)
    {
        $slideshows = Slideshow::tampil()
            ->orderBy('urutan', 'asc')
            ->get();
            
        $beritas = Berita::tampil()
            ->where('kota', $kota)
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('news', compact('beritas', 'slideshows', 'kota'));
    }

    /**
     * Serve berita image from private storage
     */
    public function serveImage($filename)
    {
        $path = storage_path('app/private/berita/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        $file = file_get_contents($path);
        $type = mime_content_type($path);

        return response($file, 200)->header('Content-Type', $type);
    }

    public function serveImage2($filename)
{
    // Jika format "slideshow/nama-file.jpg", ambil hanya nama file-nya
    if (str_contains($filename, 'slideshow/')) {
        $filename = str_replace('slideshow/', '', $filename);
    }
    
    $path = storage_path('app/private/slideshow/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    $file = file_get_contents($path);
    $type = mime_content_type($path);

    return response($file, 200)->header('Content-Type', $type);
}
}