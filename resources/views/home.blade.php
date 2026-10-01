@extends('layouts.app')

@section('title', 'Beranda - Inspektorat Jenderal')

@section('content')

{{-- ================= HERO SPLIT ================= --}}
<section class="hero-split" id="home">

    <div class="container hero-split-wrapper">

        {{-- KIRI: SLIDER --}}
        <div class="hero-slider">
            <div class="slider-wrapper">

                <div class="slide active">
                    <img src="{{ asset('assets/img/slide-1.jpg') }}" alt="Slide 1">
                </div>

                <div class="slide">
                    <img src="{{ asset('assets/img/slide-2.jpg') }}" alt="Slide 2">
                </div>

                <div class="slide">
                    <img src="{{ asset('assets/img/slide-3.jpg') }}" alt="Slide 3">
                </div>

                <button class="slider-arrow prev" onclick="prevSlide()">❮</button>
                <button class="slider-arrow next" onclick="nextSlide()">❯</button>

            </div>

            <div class="slider-dots">
                <span class="dot active" onclick="goToSlide(0)"></span>
                <span class="dot" onclick="goToSlide(1)"></span>
                <span class="dot" onclick="goToSlide(2)"></span>
            </div>
        </div>

        {{-- KANAN: CAPTION --}}
        <div class="hero-caption">
            <span class="hero-label">WEBSITE RESMI</span>
            <h1>Inspektorat Jenderal</h1>
            <p>
                Mengawal integritas, akuntabilitas, dan tata kelola
                pemerintahan yang efektif, transparan, dan profesional.
            </p>
            <div class="hero-buttons">
                <a href="#layanan" class="btn btn-primary">Layanan Kami →</a>
                <a href="{{ url('/profil') }}" class="btn btn-outline">Tentang Itjen</a>
            </div>
               </div>

    </div>
</section>

{{-- ================= QUICK MENU ================= --}}
<section class="quick-menu">
    <div class="container quick-grid">

        <a href="{{ url('/layanan-detail/wbs') }}" class="quick-card" data-aos="fade-up" data-aos-delay="0">
            <div class="quick-icon">🛡️</div>
            <div>
                <h3>WBS</h3>
                <p>Laporkan pelanggaran</p>
            </div>
        </a>

        <a href="{{ url('/layanan-detail/pengaduan') }}" class="quick-card" data-aos="fade-up" data-aos-delay="100">
            <div class="quick-icon">📢</div>
            <div>
                <h3>Pengaduan</h3>
                <p>Sampaikan aspirasi</p>
            </div>
        </a>

        <a href="{{ url('/layanan-detail/gratifikasi') }}" class="quick-card" data-aos="fade-up" data-aos-delay="200">
            <div class="quick-icon">🎁</div>
            <div>
                <h3>Gratifikasi</h3>
                <p>Laporkan hadiah</p>
            </div>
        </a>

        <a href="{{ url('/layanan-detail/informasi') }}" class="quick-card" data-aos="fade-up" data-aos-delay="300">
            <div class="quick-icon">📄</div>
            <div>
                <h3>Informasi Publik</h3>
                <p>Akses dokumen</p>
            </div>
        </a>

    </div>
</section>

      {{-- ================= SECTION PROFIL (GALERI FOTO) ================= --}}
<section class="section" id="profil" style="padding-bottom: 40px;">
    <div class="container">
        <div class="foto-grid" data-aos="fade-up">
            <img src="{{ asset('assets/img/ibu2-itjen.jpg') }}" alt="Foto 1" class="foto-item">
            <img src="{{ asset('assets/img/ibu7-itjen.jpg') }}" alt="Foto 2" class="foto-item">
            <img src="{{ asset('assets/img/ibu4-itjen.jpg') }}" alt="Foto 3" class="foto-item">
            <img src="{{ asset('assets/img/ibu6-itjen.jpg') }}" alt="Foto 4" class="foto-item">
        </div>
    </div>
</section>


{{-- ================= SECTION LAYANAN ================= --}}
<section class="section section-gray" id="layanan">
    <div class="container">

        <div class="section-heading" data-aos="fade-up">
            <span class="section-label">LAYANAN</span>
            <h2>Layanan Inspektorat Jenderal</h2>
            <p>Berbagai layanan pengawasan dan informasi untuk mendukung pemerintahan yang bersih dan akuntabel.</p>
        </div>

        <div class="service-grid">

    <a href="{{ url('/layanan-detail/wbs') }}" class="service-card" data-aos="fade-up" data-aos-delay="0">
        <div class="service-icon">🛡️</div>
        <h3>Whistleblowing System</h3>
        <p>Sarana pelaporan dugaan pelanggaran secara aman dan bertanggung jawab.</p>
        <span>Selengkapnya →</span>
    </a>

    <a href="{{ url('/layanan-detail/pengaduan') }}" class="service-card" data-aos="fade-up" data-aos-delay="100">
        <div class="service-icon">📢</div>
        <h3>Pengaduan Masyarakat</h3>
        <p>Sampaikan aspirasi, laporan, dan pengaduan terkait penyelenggaraan pemerintahan.</p>
        <span>Selengkapnya →</span>
    </a>

    <a href="{{ url('/layanan-detail/gratifikasi') }}" class="service-card" data-aos="fade-up" data-aos-delay="200">
        <div class="service-icon">🎁</div>
        <h3>Pelaporan Gratifikasi</h3>
        <p>Informasi dan layanan pelaporan gratifikasi untuk mendukung budaya antikorupsi.</p>
        <span>Selengkapnya →</span>
    </a>

    <a href="{{ url('/layanan-detail/konsultasi') }}" class="service-card" data-aos="fade-up" data-aos-delay="0">
        <div class="service-icon">📊</div>
        <h3>Konsultasi Pengawasan</h3>
        <p>Konsultasi terkait pelaksanaan pengawasan dan tata kelola organisasi.</p>
        <span>Selengkapnya →</span>
    </a>

    <a href="{{ url('/layanan-detail/informasi') }}" class="service-card" data-aos="fade-up" data-aos-delay="100">
        <div class="service-icon">📄</div>
        <h3>Informasi Publik</h3>
        <p>Akses informasi publik, dokumen, dan informasi penyelenggaraan pemerintahan.</p>
        <span>Selengkapnya →</span>
    </a>

    <a href="{{ url('/layanan-detail/pengawasan') }}" class="service-card" data-aos="fade-up" data-aos-delay="200">
        <div class="service-icon">🔎</div>
        <h3>Pengawasan Internal</h3>
        <p>Informasi mengenai kegiatan audit, reviu, evaluasi, dan pemantauan.</p>
        <span>Selengkapnya →</span>
    </a>

</div>
        </div>
</section>


{{-- ================= SECTION BERITA ================= --}}
<section class="section" id="berita">
    <div class="container">

        <div class="section-heading heading-flex" data-aos="fade-up">
            <div>
                <span class="section-label">INFORMASI TERKINI</span>
                <h2>Berita & Kegiatan</h2>
            </div>
            <a href="#" class="btn-small">Semua Berita →</a>
        </div>

        <div class="news-grid">

            <article class="news-card" data-aos="fade-up" data-aos-delay="0">
                <div class="news-image">BERITA</div>
                <div class="news-content">
                    <span class="news-date">03 September 2026</span>
                    <h3>Kegiatan Pengawasan dan Penguatan Tata Kelola</h3>
                    <p>Informasi kegiatan terbaru Inspektorat Jenderal dalam meningkatkan kualitas pengawasan internal.</p>
                    <a href="{{ url('/berita/pengawasan-tata-kelola') }}">Baca Selengkapnya →</a>
                </div>
            </article>

            <article class="news-card" data-aos="fade-up" data-aos-delay="150">
                <div class="news-image news-image-2">KEGIATAN</div>
                <div class="news-content">
                    <span class="news-date">02 September 2026</span>
                    <h3>Penguatan Integritas dan Akuntabilitas Organisasi</h3>
                    <p>Upaya berkelanjutan dalam membangun organisasi yang berintegritas dan profesional.</p>
                    <a href="{{ url('/berita/integritas-akuntabilitas') }}">Baca Selengkapnya →</a>
                </div>
            </article>

            <article class="news-card" data-aos="fade-up" data-aos-delay="300">
                <div class="news-image news-image-3">PENGAWASAN</div>
                <div class="news-content">
                    <span class="news-date">01 September 2026</span>
                    <h3>Peningkatan Efektivitas Pengawasan Internal</h3>
                    <p>Informasi mengenai pelaksanaan pengawasan dan evaluasi penyelenggaraan pemerintahan.</p>
                    <a href="{{ url('/berita/efektivitas-pengawasan') }}">Baca Selengkapnya →</a>
                </div>
            </article>

        </div>
        </div>
</section>


{{-- ================= SECTION INFORMASI PUBLIK ================= --}}
<section class="information" id="informasi">
    <div class="container">

        <div class="section-heading light" data-aos="fade-up">
            <span class="section-label">INFORMASI PUBLIK</span>
            <h2>Akses Informasi</h2>
            <p>Temukan berbagai dokumen dan informasi publik yang tersedia untuk masyarakat.</p>
        </div>

        <div class="information-grid">

            <a href="{{ url('/informasi/regulasi') }}" data-aos="zoom-in" data-aos-delay="0">
                <span>📚</span>
                <strong>Regulasi</strong>
                <small>Peraturan dan kebijakan</small>
            </a>

            <a href="{{ url('/informasi/dokumen') }}" data-aos="zoom-in" data-aos-delay="100">
                <span>📄</span>
                <strong>Dokumen</strong>
                <small>Dokumen publik</small>
            </a>

            <a href="{{ url('/informasi/laporan') }}" data-aos="zoom-in" data-aos-delay="200">
                <span>📊</span>
                <strong>Laporan Kinerja</strong>
                <small>Laporan dan akuntabilitas</small>
            </a>

            <a href="{{ url('/informasi/agenda') }}" data-aos="zoom-in" data-aos-delay="300">
                <span>📅</span>
                <strong>Agenda</strong>
                <small>Agenda kegiatan</small>
            </a>

        </div>
        </div>
</section>


{{-- ================= SECTION CTA ================= --}}
<section class="cta">
    <div class="container cta-content" data-aos="fade-up">

        <div>
            <span>BUTUH INFORMASI?</span>
            <h2>Kami siap membantu Anda</h2>
            <p>Sampaikan pertanyaan, aspirasi, atau pengaduan melalui kanal resmi Inspektorat Jenderal.</p>
        </div>

        <a href="#kontak" class="btn btn-primary">Hubungi Kami</a>

    </div>
</section>

@endsection