<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        Berita::create([
            'slug' => 'pengawasan-tata-kelola',
            'kategori' => 'BERITA',
            'judul' => 'Kegiatan Pengawasan dan Penguatan Tata Kelola',
            'penulis' => 'Humas Itjen',
            'ringkasan' => 'Informasi kegiatan terbaru Inspektorat Jenderal dalam meningkatkan kualitas pengawasan internal.',
            'konten' => "Inspektorat Jenderal kembali menggelar kegiatan pengawasan dan penguatan tata kelola di lingkungan instansi pemerintah.\n\nKegiatan dihadiri oleh seluruh jajaran pimpinan dan pegawai.\n\nMelalui kegiatan ini, diharapkan seluruh pegawai dapat memahami pentingnya integritas.",
            'tags' => 'Pengawasan,Tata Kelola,Akuntabilitas',
        ]);

        Berita::create([
            'slug' => 'integritas-akuntabilitas',
            'kategori' => 'KEGIATAN',
            'judul' => 'Penguatan Integritas dan Akuntabilitas Organisasi',
            'penulis' => 'Humas Itjen',
            'ringkasan' => 'Upaya berkelanjutan dalam membangun organisasi yang berintegritas dan profesional.',
            'konten' => "Dalam rangka membangun organisasi yang berintegritas dan profesional.\n\nIntegritas merupakan fondasi utama.\n\nKegiatan ini menghadirkan beberapa narasumber kompeten.",
            'tags' => 'Integritas,Akuntabilitas,Budaya Organisasi',
        ]);

        Berita::create([
            'slug' => 'efektivitas-pengawasan',
            'kategori' => 'PENGAWASAN',
            'judul' => 'Peningkatan Efektivitas Pengawasan Internal',
            'penulis' => 'Humas Itjen',
            'ringkasan' => 'Informasi mengenai pelaksanaan pengawasan dan evaluasi penyelenggaraan pemerintahan.',
            'konten' => "Peningkatan efektivitas pengawasan internal menjadi salah satu fokus utama.\n\nSalah satu langkah strategis adalah pengawasan berbasis risiko.\n\nKe depan, Inspektorat Jenderal akan terus berinovasi.",
            'tags' => 'Pengawasan,Efektivitas,Evaluasi',
        ]);
    }
}
