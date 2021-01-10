<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['kode_transaksi', 'id_anggota', 'id_buku', 'tgl_pinjam', 'tgl_kembali', 'status', 'ket'];

    public function anggota()
    {
    	return $this->belongsTo(Anggota::class);
    }

    public function buku()
    {
    	return $this->belongsTo(Buku::class);
    }
}
