<!-- ================= NAVBAR ================= -->
<header class="navbar">
    <div class="container nav-wrapper">

        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('assets/img/logo-itjen.png') }}" alt="Logo Inspektorat Jenderal" class="logo-img">
            <div class="logo-text">
                <strong>INSPEKTORAT JENDERAL</strong>
                <span>Integritas • Akuntabilitas • Profesional</span>
            </div>
        </a>

        <nav class="menu" id="menu">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/profil') }}">Profil</a>
            <a href="{{ url('/#layanan') }}">Layanan</a>
            <a href="{{ url('/#berita') }}">Berita</a>
            <a href="{{ url('/#informasi') }}">Informasi</a>
            <a href="{{ url('/#kontak') }}">Kontak</a>
        </nav>

        <button class="menu-toggle" onclick="toggleMenu()">☰</button>

    </div>
</header>