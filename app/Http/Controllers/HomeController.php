<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with latest news
     */
    public function index()
    {
        // Ambil 5 berita terbaru untuk carousel
        $beritas = Berita::tampil()
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('welcome', compact('beritas'));
    }
}