<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    // 1. Fungsi untuk MENAMPILKAN semua data Posyandu
    public function index()
    {
        $posyandu = Posyandu::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data Posyandu',
            'data'    => $posyandu
        ], 200);
    }

    // 2. Fungsi untuk MENYIMPAN data Posyandu baru dari aplikasi HP
    public function store(Request $request)
    {
        // Validasi inputan wajib diisi
        $request->validate([
            'nama_posyandu' => 'required',
            'alamat'        => 'required',
            'kecamatan'     => 'required',
        ]);

        $posyandu = Posyandu::create([
            'nama_posyandu' => $request->nama_posyandu,
            'alamat'        => $request->alamat,
            'kecamatan'     => $request->kecamatan,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Posyandu Berhasil Ditambahkan!',
            'data'    => $posyandu
        ], 201);
    }
}