<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Informasi;

class InformasiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'slug' => 'regulasi',
                'icon' => '📚',
                'judul' => 'Regulasi',
                'subjudul' => 'Peraturan dan Kebijakan',
                'deskripsi' => 'Kumpulan peraturan, kebijakan, dan regulasi yang menjadi dasar pelaksanaan tugas dan fungsi Inspektorat Jenderal dalam menjalankan pengawasan internal.',
                'kategori' => [
                    ['nama' => 'Peraturan Pemerintah', 'jumlah' => '12 dokumen', 'tahun' => '2020-2026'],
                    ['nama' => 'Peraturan Menteri', 'jumlah' => '28 dokumen', 'tahun' => '2018-2026'],
                    ['nama' => 'Keputusan Menteri', 'jumlah' => '15 dokumen', 'tahun' => '2019-2026'],
                    ['nama' => 'Surat Edaran', 'jumlah' => '22 dokumen', 'tahun' => '2021-2026'],
                    ['nama' => 'Standar Operasional Prosedur', 'jumlah' => '18 dokumen', 'tahun' => '2020-2026']
                ],
                'manfaat' => [
                    'Menjadi acuan dalam pelaksanaan tugas pengawasan',
                    'Menjamin kepatuhan terhadap peraturan yang berlaku',
                    'Meningkatkan transparansi dan akuntabilitas',
                    'Menjadi dasar pengambilan keputusan',
                    'Mendukung terciptanya tata kelola yang baik'
                ]
            ],
            [
                'slug' => 'dokumen',
                'icon' => '📄',
                'judul' => 'Dokumen Publik',
                'subjudul' => 'Akses Dokumen & Arsip',
                'deskripsi' => 'Kumpulan dokumen publik yang dapat diakses oleh masyarakat, meliputi dokumen perencanaan, pelaporan, dan dokumen pendukung lainnya.',
                'kategori' => [
                    ['nama' => 'Rencana Kerja', 'jumlah' => '8 dokumen', 'tahun' => '2022-2026'],
                    ['nama' => 'Laporan Tahunan', 'jumlah' => '10 dokumen', 'tahun' => '2016-2026'],
                    ['nama' => 'Laporan Keuangan', 'jumlah' => '10 dokumen', 'tahun' => '2016-2026'],
                    ['nama' => 'Dokumen Evaluasi', 'jumlah' => '14 dokumen', 'tahun' => '2020-2026'],
                    ['nama' => 'Nota Kesepahaman', 'jumlah' => '6 dokumen', 'tahun' => '2021-2026']
                ],
                'manfaat' => [
                    'Masyarakat dapat mengakses informasi dengan mudah',
                    'Meningkatkan keterbukaan informasi publik',
                    'Mendukung partisipasi masyarakat dalam pengawasan',
                    'Menjadi referensi penelitian dan kajian',
                    'Mewujudkan tata kelola pemerintahan yang transparan'
                ]
            ],
            [
                'slug' => 'laporan',
                'icon' => '📊',
                'judul' => 'Laporan Kinerja',
                'subjudul' => 'Laporan & Akuntabilitas',
                'deskripsi' => 'Laporan kinerja Inspektorat Jenderal yang memuat capaian, evaluasi, dan akuntabilitas pelaksanaan program dan kegiatan.',
                'kategori' => [
                    ['nama' => 'Laporan Akuntabilitas Kinerja', 'jumlah' => '10 dokumen', 'tahun' => '2016-2026'],
                    ['nama' => 'Laporan Monitoring', 'jumlah' => '24 dokumen', 'tahun' => '2020-2026'],
                    ['nama' => 'Laporan Evaluasi Program', 'jumlah' => '16 dokumen', 'tahun' => '2019-2026'],
                    ['nama' => 'Laporan Pengawasan', 'jumlah' => '32 dokumen', 'tahun' => '2018-2026'],
                    ['nama' => 'Laporan Hasil Audit', 'jumlah' => '45 dokumen', 'tahun' => '2015-2026']
                ],
                'manfaat' => [
                    'Menjadi bahan evaluasi kinerja organisasi',
                    'Meningkatkan akuntabilitas publik',
                    'Menjadi dasar perbaikan berkelanjutan',
                    'Mendukung pengambilan keputusan strategis',
                    'Mewujudkan transparansi kinerja'
                ]
            ],
            [
                'slug' => 'agenda',
                'icon' => '📅',
                'judul' => 'Agenda Kegiatan',
                'subjudul' => 'Jadwal & Agenda Resmi',
                'deskripsi' => 'Informasi mengenai agenda kegiatan, jadwal rapat, dan acara resmi Inspektorat Jenderal yang bersifat terbuka untuk publik.',
                'kategori' => [
                    ['nama' => 'Rapat Koordinasi', 'jumlah' => '12 agenda', 'tahun' => '2026'],
                    ['nama' => 'Sosialisasi Kebijakan', 'jumlah' => '8 agenda', 'tahun' => '2026'],
                    ['nama' => 'Pelatihan Internal', 'jumlah' => '15 agenda', 'tahun' => '2026'],
                    ['nama' => 'Kegiatan Pengawasan', 'jumlah' => '24 agenda', 'tahun' => '2026'],
                    ['nama' => 'Acara Resmi', 'jumlah' => '10 agenda', 'tahun' => '2026']
                ],
                'manfaat' => [
                    'Masyarakat dapat mengetahui agenda kegiatan',
                    'Meningkatkan partisipasi dalam kegiatan publik',
                    'Menjadi sarana koordinasi antar pihak',
                    'Mendukung keterbukaan agenda organisasi',
                    'Memudahkan perencanaan kegiatan terkait'
                ]
            ]
        ];

        foreach ($data as $item) {
            Informasi::create($item);
        }
    }
}