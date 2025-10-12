<?php

namespace App\Http\Controllers;

use App\Models\SmartgardenSensor;
use Illuminate\Http\Request;

class SmartgardenSensorController extends Controller
{
    public function index()
    {
        // Ambil data pertama dari tabel SmartgardenSensor
        $sensor = SmartgardenSensor::first();

        // Kirim ke view
        return view('product_sensor', compact('sensor'));
    }
}
