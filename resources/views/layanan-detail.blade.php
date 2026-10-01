@extends('layouts.app')

@section('title', $layanan->judul . ' - Inspektorat Jenderal')

@section('content')

{{-- HERO --}}
<section class="detail-hero">
    <div class="container">
        <span class="icon">{{ $layanan->icon }}</span>
        <h1>{{ $layanan->judul }}</h1>
        <p>{{ $layanan->subjudul }}</p>
    </div>
</section>

{{-- KONTEN --}}
<main class="container">
    <div class="detail-content">
        <p class="lead">{{ $layanan->deskripsi }}</p>

        <h2>Keunggulan Layanan</h2>
        <ul>
            @foreach ($layanan->poin as $p)
                <li>{{ $p }}</li>
            @endforeach
        </ul>

        <h2>Prosedur Layanan</h2>
        <ol class="prosedur-list">
            @foreach ($layanan->prosedur as $p)
                <li>{{ $p }}</li>
            @endforeach
        </ol>

        <a href="{{ url('/#layanan') }}" class="btn-back">← Kembali ke Layanan</a>
    </div>
</main>

@endsection