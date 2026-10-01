<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'icon',
        'judul',
        'subjudul',
        'deskripsi',
        'poin',
        'prosedur',
    ];

    protected $casts = [
        'poin' => 'array',
        'prosedur' => 'array',
    ];
}