<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels'; // Nama tabel
    protected $fillable = ['judul', 'kategori', 'konten', 'gambar']; // Kolom yang bisa diisi
}
