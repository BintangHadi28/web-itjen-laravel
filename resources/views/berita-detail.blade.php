@extends('layouts.app')

@section('title', $berita->judul . ' - Inspektorat Jenderal')

@section('content')

{{-- HERO --}}
<section class="berita-hero" style="background: linear-gradient(135deg, #6B4226, #8B5A2B);">
    <h1>{{ $berita->kategori }}</h1>
</section>

{{-- KONTEN --}}
<main class="container">
    <article class="berita-content">

        <div class="berita-meta">
            <span class="kategori">{{ $berita->kategori }}</span>
            <span>📅 {{ $berita->created_at->format('d F Y') }}</span>
            <span>✍️ {{ $berita->penulis }}</span>
        </div>

        <h1>{{ $berita->judul }}</h1>
        <div class="divider"></div>

        @foreach (explode("\n\n", $berita->konten) as $paragraf)
            <p>{{ $paragraf }}</p>
        @endforeach

        <div class="berita-tags">
            @foreach (explode(',', $berita->tags) as $tag)
                <span>#{{ trim($tag) }}</span>
            @endforeach
        </div>

        <a href="{{ url('/#berita') }}" class="btn-back">← Kembali ke Berita</a>

    </article>
</main>

@endsection