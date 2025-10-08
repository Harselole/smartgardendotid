<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/news', [BeritaController::class, 'index'])->name('news.index');
Route::get('/news/search', [BeritaController::class, 'search'])->name('news.search');
Route::get('/news/city/{kota}', [BeritaController::class, 'byCity'])->name('news.city');
Route::get('/berita/image/{filename}', [BeritaController::class, 'serveImage'])->name('berita.image');
Route::get('/news/{slug}', [BeritaController::class, 'show'])->name('news.show');