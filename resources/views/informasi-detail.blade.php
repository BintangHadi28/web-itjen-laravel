@extends('layouts.app')

@section('title', $informasi->judul . ' - Inspektorat Jenderal')

@section('content')

<section class="info-hero">
    <div class="container">
        <span class="icon">{{ $informasi->icon }}</span>
        <h1>{{ $informasi->judul }}</h1>
        <p>{{ $informasi->subjudul }}</p>
    </div>
</section>

<main class="container">
    <div class="info-content">
        <p class="lead">{{ $informasi->deskripsi }}</p>

        <h2>Kategori {{ $informasi->judul }}</h2>
        <div class="kategori-grid">
            @foreach ($informasi->kategori as $k)
                <div class="kategori-card">
                    <strong>{{ $k['nama'] }}</strong>
                    <span>{{ $k['jumlah'] }}</span>
                    <small>Periode {{ $k['tahun'] }}</small>
                </div>
            @endforeach
        </div>

        <h2>Manfaat</h2>
        <ul class="manfaat-list">
            @foreach ($informasi->manfaat as $m)
                <li>{{ $m }}</li>
            @endforeach
        </ul>

        <a href="{{ url('/#informasi') }}" class="btn-back">← Kembali ke Informasi Publik</a>
    </div>
</main>

@endsection