<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'icon',
        'judul',
        'subjudul',
        'deskripsi',
        'kategori',
        'manfaat',
    ];

    protected $casts = [
        'kategori' => 'array',
        'manfaat' => 'array',
    ];
}