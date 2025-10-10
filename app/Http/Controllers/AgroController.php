<?php

namespace App\Http\Controllers;

use App\Models\SmartgardenAgro;
use Illuminate\Http\Request;

class AgroController extends Controller
{
    public function index()
    {
        // Ambil data pertama dari tabel SmartgardenAgro
        $agro = SmartgardenAgro::first();

        // Kirim ke view
        return view('product_agro', compact('agro'));
    }
}
