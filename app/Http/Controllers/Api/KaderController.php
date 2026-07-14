<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kader;
use Illuminate\Http\Request;

class KaderController extends Controller
{
    // Menampilkan semua data kader beserta info posyandu tempat dia bertugas
    public function index()
    {
        $kader = Kader::with('posyandu')->get();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data Kader',
            'data'    => $kader
        ], 200);
    }

    // Menyimpan data kader baru
    public function store(Request $request)
    {
        $request->validate([
            'posyandu_id' => 'required|exists:posyandus,id',
            'nama_kader'  => 'required',
            'jabatan'     => 'required',
        ]);

        $kader = Kader::create([
            'posyandu_id' => $request->posyandu_id,
            'nama_kader'  => $request->nama_kader,
            'no_telp'     => $request->no_telp,
            'jabatan'     => $request->jabatan,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Kader Berhasil Ditambahkan!',
            'data'    => $kader
        ], 201);
    }
}