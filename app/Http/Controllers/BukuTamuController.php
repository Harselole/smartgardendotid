<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'pesan' => 'required|string',
            'produk' => 'required|string|max:255',
        ]);

        // Simpan ke database
        BukuTamu::create($validated);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah terkirim.');
    }
}