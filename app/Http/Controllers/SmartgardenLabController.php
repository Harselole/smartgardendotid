<?php

namespace App\Http\Controllers;

use App\Models\SmartgardenLab;
use Illuminate\Http\Request;

class SmartgardenLabController extends Controller
{
    public function index()
    {
        // Ambil data pertama dari tabel SmartgardenLab
        $labs = SmartgardenLab::first();

        // Kirim ke view
        return view('product_labs', compact('labs'));
    }
}
