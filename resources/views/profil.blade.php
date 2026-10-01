@extends('layouts.app')

@section('title', 'Profil - Inspektorat Jenderal')

@section('content')

{{-- ================= HERO PROFIL ================= --}}
<section class="profil-hero">
    <div class="container">
        <span class="label">TENTANG KAMI</span>
        <h1>Inspektorat Jenderal</h1>
        <p>Mengawal integritas, akuntabilitas, dan tata kelola pemerintahan yang efektif, transparan, dan profesional.</p>
    </div>
</section>

{{-- ================= SEJARAH ================= --}}
<section class="profil-section">
    <div class="container">
        <h2>Sejarah <span class="accent">Singkat</span></h2>
        <div class="sejarah-box">
            <p>Inspektorat Jenderal adalah unit kerja di lingkungan kementerian/lembaga yang berfungsi sebagai pengawas internal. Keberadaannya merupakan amanat dari peraturan perundang-undangan yang menghendaki adanya pengawasan internal yang independen dan objektif.</p>
            <p>Seiring dengan perkembangan tata kelola pemerintahan, peran Inspektorat Jenderal terus mengalami penguatan. Dari yang semula hanya berfokus pada pemeriksaan keuangan, kini Inspektorat Jenderal juga berperan dalam pengawasan kinerja, reviu, evaluasi, pemantauan, dan konsultasi.</p>
            <p>Peran strategis Inspektorat Jenderal adalah memastikan penyelenggaraan tugas dan fungsi organisasi berjalan akuntabel, transparan, dan bebas dari penyimpangan, sehingga tercipta tata kelola pemerintahan yang baik dan terpercaya.</p>
        </div>
    </div>
</section>

{{-- ================= VISI MISI ================= --}}
<section class="profil-section profil-section-gray">
    <div class="container">
        <h2>Visi & <span class="accent">Misi</span></h2>

        <div class="visi-misi-grid">
            <div class="visi-card">
                <h3>VISI</h3>
                <p>"Terwujudnya pengawasan internal yang profesional, independen, dan berintegritas untuk mendukung tata kelola pemerintahan yang bersih dan akuntabel."</p>
            </div>

            <div class="misi-card">
                <h3>MISI</h3>
                <ol>
                    <li>Melaksanakan pengawasan internal yang efektif dan efisien</li>
                    <li>Meningkatkan kualitas tata kelola dan manajemen risiko</li>
                    <li>Memberikan assurance dan consulting yang bernilai tambah</li>
                    <li>Membangun budaya integritas dan antikorupsi</li>
                    <li>Mengembangkan kapasitas SDM pengawasan yang profesional</li>
                    <li>Mendorong digitalisasi proses pengawasan</li>
                </ol>
            </div>
        </div>
    </div>
</section>

{{-- ================= TUGAS & FUNGSI ================= --}}
<section class="profil-section">
    <div class="container">
        <h2>Tugas & <span class="accent">Fungsi</span></h2>
        <p>Dalam menjalankan perannya, Inspektorat Jenderal memiliki beberapa tugas dan fungsi utama:</p>

        <div class="tugas-grid">
            <div class="tugas-card">
                <span class="icon">🔍</span>
                <h4>Pengawasan Internal</h4>
                <p>Melakukan pengawasan terhadap pelaksanaan tugas dan fungsi seluruh unit kerja di lingkungan kementerian/lembaga.</p>
            </div>
            <div class="tugas-card">
                <span class="icon">📋</span>
                <h4>Pemeriksaan</h4>
                <p>Melaksanakan pemeriksaan kinerja, keuangan, dan kepatuhan terhadap peraturan yang berlaku.</p>
            </div>
            <div class="tugas-card">
                <span class="icon">📊</span>
                <h4>Reviu & Evaluasi</h4>
                <p>Melakukan reviu dan evaluasi terhadap laporan keuangan, kinerja, dan sistem pengendalian internal.</p>
            </div>
            <div class="tugas-card">
                <span class="icon">🎯</span>
                <h4>Pembinaan</h4>
                <p>Melakukan pembinaan dan peningkatan kapasitas SDM dalam rangka penguatan tata kelola organisasi.</p>
            </div>
            <div class="tugas-card">
                <span class="icon">👁️</span>
                <h4>Pemantauan</h4>
                <p>Memantau tindak lanjut hasil pemeriksaan dan evaluasi untuk memastikan perbaikan berjalan.</p>
            </div>
            <div class="tugas-card">
                <span class="icon">💬</span>
                <h4>Konsultasi</h4>
                <p>Memberikan konsultasi dan pendampingan kepada unit kerja dalam pengelolaan risiko dan pengendalian internal.</p>
            </div>
        </div>
    </div>
</section>

{{-- ================= STRUKTUR ================= --}}
<section class="profil-section profil-section-gray">
    <div class="container">
        <h2>Struktur <span class="accent">Organisasi</span></h2>
        <p>Inspektorat Jenderal dipimpin oleh seorang Inspektur Jenderal yang bertanggung jawab langsung kepada Menteri/Kepala Lembaga.</p>

        <div class="struktur-grid">
            <div class="struktur-card">
                <div class="avatar">IJ</div>
                <strong>Inspektur Jenderal</strong>
                <small>Pimpinan tertinggi</small>
            </div>
            <div class="struktur-card">
                <div class="avatar">SI</div>
                <strong>Sekretariat Itjen</strong>
                <small>Administrasi & pelayanan</small>
            </div>
            <div class="struktur-card">
                <div class="avatar">I</div>
                <strong>Inspektorat I</strong>
                <small>Pengawasan bidang I</small>
            </div>
            <div class="struktur-card">
                <div class="avatar">II</div>
                <strong>Inspektorat II</strong>
                <small>Pengawasan bidang II</small>
            </div>
            <div class="struktur-card">
                <div class="avatar">III</div>
                <strong>Inspektorat III</strong>
                <small>Pengawasan bidang III</small>
            </div>
            <div class="struktur-card">
                <div class="avatar">IV</div>
                <strong>Inspektorat IV</strong>
                <small>Pengawasan bidang IV</small>
            </div>
        </div>
    </div>
</section>

{{-- ================= TOMBOL KEMBALI ================= --}}
<section class="back-wrap">
    <div class="container">
        <a href="{{ url('/') }}" class="btn-back">← Kembali ke Beranda</a>
    </div>
</section>

@endsection