<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = ['nama', 'alamat', 'tempat_lahir', 'jenis_kelamin', 'tgl_lahir'];
}
