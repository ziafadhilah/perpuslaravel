<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['judul', 'id_kategori', 'pengarang', 'penerbit', 'jumlah_buku', 'tahun_terbit', 'deskripsi'];

    public function kategori()
    {
    	return $this->belongsTo(Kategori::class);
    }
}
