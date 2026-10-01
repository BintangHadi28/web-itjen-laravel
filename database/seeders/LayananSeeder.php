<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'slug' => 'wbs',
                'icon' => '🛡️',
                'judul' => 'Whistleblowing System',
                'subjudul' => 'Laporkan Dugaan Pelanggaran',
                'deskripsi' => 'Whistleblowing System (WBS) adalah sarana bagi pegawai maupun masyarakat untuk melaporkan dugaan pelanggaran, penyalahgunaan wewenang, atau tindak pidana korupsi yang terjadi di lingkungan instansi.',
                'poin' => [
                    'Pelaporan dapat dilakukan secara anonim',
                    'Identitas pelapor dijamin kerahasiaannya',
                    'Laporan akan ditindaklanjuti secara profesional',
                    'Pelapor dilindungi dari segala bentuk ancaman',
                    'Setiap laporan diverifikasi dan ditelusuri'
                ],
                'prosedur' => [
                    'Isi formulir pelaporan secara lengkap',
                    'Lampirkan bukti pendukung (jika ada)',
                    'Kirim laporan melalui sistem yang tersedia',
                    'Tunggu proses verifikasi dari tim WBS',
                    'Dapatkan notifikasi status laporan'
                ]
            ],
            [
                'slug' => 'pengaduan',
                'icon' => '📢',
                'judul' => 'Pengaduan Masyarakat',
                'subjudul' => 'Sampaikan Aspirasi & Pengaduan',
                'deskripsi' => 'Layanan Pengaduan Masyarakat merupakan kanal resmi bagi masyarakat untuk menyampaikan aspirasi, keluhan, kritik, maupun saran terkait pelayanan dan penyelenggaraan pemerintahan.',
                'poin' => [
                    'Kanal resmi yang terpercaya',
                    'Respon cepat dari petugas terkait',
                    'Proses transparan dan akuntabel',
                    'Tersedia kanal online dan offline',
                    'Notifikasi status pengaduan'
                ],
                'prosedur' => [
                    'Registrasi atau isi formulir pengaduan',
                    'Sampaikan pengaduan dengan jelas dan sopan',
                    'Lampirkan bukti atau data pendukung',
                    'Terima nomor tiket pengaduan',
                    'Pantau status pengaduan secara berkala'
                ]
            ],
            [
                'slug' => 'gratifikasi',
                'icon' => '🎁',
                'judul' => 'Pelaporan Gratifikasi',
                'subjudul' => 'Layanan Pelaporan Gratifikasi',
                'deskripsi' => 'Pelaporan Gratifikasi adalah layanan untuk melaporkan penerimaan hadiah, cinderamata, atau bantuan lainnya yang berkaitan dengan jabatan, guna mendukung budaya antikorupsi.',
                'poin' => [
                    'Sesuai dengan peraturan yang berlaku',
                    'Melindungi pelapor dari konflik kepentingan',
                    'Proses pelaporan mudah dan cepat',
                    'Terintegrasi dengan sistem KPK',
                    'Mendukung budaya antikorupsi'
                ],
                'prosedur' => [
                    'Identifikasi jenis gratifikasi yang diterima',
                    'Isi formulir pelaporan gratifikasi',
                    'Lampirkan bukti penerimaan',
                    'Kirim laporan dalam 30 hari kerja',
                    'Tunggu proses verifikasi'
                ]
            ],
            [
                'slug' => 'konsultasi',
                'icon' => '📊',
                'judul' => 'Konsultasi Pengawasan',
                'subjudul' => 'Konsultasi Tata Kelola Organisasi',
                'deskripsi' => 'Layanan Konsultasi Pengawasan memberikan pendampingan dan saran terkait pelaksanaan pengawasan internal, tata kelola organisasi, serta kepatuhan terhadap peraturan.',
                'poin' => [
                    'Konsultasi dengan auditor berpengalaman',
                    'Pendampingan tata kelola organisasi',
                    'Saran perbaikan sistem internal',
                    'Bimbingan penyusunan SOP',
                    'Diskusi permasalahan pengawasan'
                ],
                'prosedur' => [
                    'Ajukan permohonan konsultasi',
                    'Jelaskan topik yang ingin dikonsultasikan',
                    'Tentukan jadwal pertemuan',
                    'Ikuti sesi konsultasi',
                    'Terima laporan hasil konsultasi'
                ]
            ],
            [
                'slug' => 'informasi',
                'icon' => '📄',
                'judul' => 'Informasi Publik',
                'subjudul' => 'Akses Informasi & Dokumen',
                'deskripsi' => 'Layanan Informasi Publik menyediakan akses bagi masyarakat untuk memperoleh informasi, dokumen, dan data terkait penyelenggaraan pemerintahan sesuai dengan keterbukaan informasi publik.',
                'poin' => [
                    'Sesuai UU Keterbukaan Informasi Publik',
                    'Berbagai dokumen tersedia untuk publik',
                    'Proses permintaan informasi mudah',
                    'Respon dalam waktu yang ditentukan',
                    'Informasi yang akurat dan terpercaya'
                ],
                'prosedur' => [
                    'Tentukan informasi yang dibutuhkan',
                    'Ajukan permintaan informasi',
                    'Isi formulir permintaan',
                    'Tunggu proses penyediaan informasi',
                    'Terima informasi sesuai ketentuan'
                ]
            ],
            [
                'slug' => 'pengawasan',
                'icon' => '🔎',
                'judul' => 'Pengawasan Internal',
                'subjudul' => 'Audit, Reviu, Evaluasi & Pemantauan',
                'deskripsi' => 'Layanan Pengawasan Internal mencakup kegiatan audit, reviu, evaluasi, dan pemantauan untuk memastikan penyelenggaraan pemerintahan berjalan efektif, efisien, dan akuntabel.',
                'poin' => [
                    'Audit kinerja dan keuangan',
                    'Reviu laporan keuangan',
                    'Evaluasi sistem pengendalian internal',
                    'Pemantauan tindak lanjut hasil audit',
                    'Pendampingan pemeriksaan eksternal'
                ],
                'prosedur' => [
                    'Perencanaan program pengawasan',
                    'Pelaksanaan audit/reviu/evaluasi',
                    'Penyusunan laporan hasil',
                    'Pemantauan tindak lanjut',
                    'Evaluasi hasil perbaikan'
                ]
            ]
        ];

        foreach ($data as $item) {
            Layanan::create($item);
        }
    }
}