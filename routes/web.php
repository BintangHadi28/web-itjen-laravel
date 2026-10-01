<?php

use Illuminate\Support\Facades\Route;
use App\Models\Layanan;
use App\Models\Berita;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/layanan-detail/{slug}', function ($slug) {
    $layanan = Layanan::where('slug', $slug)->firstOrFail();
    return view('layanan-detail', ['layanan' => $layanan]);
});

Route::get('/berita/{slug}', function ($slug) {
    $berita = Berita::where('slug', $slug)->firstOrFail();
    return view('berita-detail', ['berita' => $berita]);
});

Route::get('/informasi/{slug}', function ($slug) {
    $informasi = \App\Models\Informasi::where('slug', $slug)->firstOrFail();
    return view('informasi-detail', ['informasi' => $informasi]);
});