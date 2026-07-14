<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk mengizinkan input data ke kolom berikut:
    protected $fillable = ['nama_posyandu', 'alamat', 'kecamatan'];
}