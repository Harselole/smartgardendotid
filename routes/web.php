<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SmartgardenAiController;
use App\Http\Controllers\SmartgardenLabController;
use App\Http\Controllers\SmartgardenSensorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/agro', function () {
    return view('product_agro');
});

Route::get('/sensor', function () {
    return view('product_sensor');
});

Route::get('/ai', function () {
    return view('product_ai');
});

Route::get('/labs', function () {
    return view('product_labs');
});

// Route untuk homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes untuk Berita - URUTAN PENTING!
Route::get('/news', [BeritaController::class, 'index'])->name('news.index');
Route::get('/news/search', [BeritaController::class, 'search'])->name('news.search');
Route::get('/news/city/{kota}', [BeritaController::class, 'byCity'])->name('news.city');

// Routes untuk serve images - HARUS SEBELUM news/{slug}
Route::get('/berita/image/{filename}', [BeritaController::class, 'serveImage'])->name('berita.image');
Route::get('/slideshow/image/{filename}', [BeritaController::class, 'serveImage2'])->name('slideshow.image');

// Route untuk detail berita - HARUS PALING AKHIR karena menggunakan wildcard {slug}
Route::get('/news/{slug}', [BeritaController::class, 'show'])->name('news.show');

Route::get('/agro', [AgroController::class, 'index'])->name('agro.index');
Route::get('/sensor', [SmartgardenSensorController::class, 'index'])->name('sensor.index');
Route::get('/ai', [SmartgardenAiController::class, 'index'])->name('ai.index');
Route::get('/labs', [SmartgardenLabController::class, 'index'])->name('labs.index');

// Route untuk testing (opsional, bisa dihapus di production)
// Route::get('/newstest', function () {
//     return view('news_detail');
// });