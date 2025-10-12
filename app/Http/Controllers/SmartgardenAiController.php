<?php

namespace App\Http\Controllers;

use App\Models\SmartgardenAi;
use Illuminate\Http\Request;

class SmartgardenAiController extends Controller
{
    public function index()
    {
        // Ambil data pertama dari tabel SmartgardenAi
        $ai = SmartgardenAi::first();

        // Kirim ke view
        return view('product_ai', compact('ai'));
    }
}
