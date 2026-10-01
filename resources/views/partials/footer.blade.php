<!-- ================= FOOTER ================= -->
<footer class="footer" id="kontak">
    <div class="container footer-grid">

        <div class="footer-brand">
            <div class="footer-logo">ITJEN</div>
            <h3>INSPEKTORAT JENDERAL</h3>
            <p>Mengawal integritas dan akuntabilitas penyelenggaraan pemerintahan.</p>
        </div>

        <div>
            <h4>Navigasi</h4>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/profil') }}">Profil</a>
            <a href="{{ url('/#layanan') }}">Layanan</a>
            <a href="{{ url('/#berita') }}">Berita</a>
        </div>

        <div>
            <h4>Layanan</h4>
            <a href="{{ url('/layanan-detail/-detail/wbs') }}">WBS</a>
            <a href="{{ url('/layanan-detail/-detail/pengaduan') }}">Pengaduan</a>
            <a href="{{ url('/layanan-detail/-detail/gratifikasi') }}">Gratifikasi</a>
            <a href="{{ url('/layanan-detail/-detail/informasi') }}">Informasi Publik</a>
        </div>

        <div>
            <h4>Kontak</h4>
            <p>📍 Alamat kantor Inspektorat Jenderal</p>
            <p>✉️ email@itjen.go.id</p>
            <p>☎️ (021) 0000000</p>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            © {{ date('Y') }} Inspektorat Jenderal. Semua Hak Dilindungi.
        </div>
    </div>
</footer>