<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Menampilkan semua data pasien/balita beserta info posyandunya
    public function index()
    {
        $pasien = Pasien::with('posyandu')->get();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data Pasien Balita',
            'data'    => $pasien
        ], 200);
    }

    // Menyimpan data pasien balita baru
    public function store(Request $request)
    {
        $request->validate([
            'posyandu_id'   => 'required|exists:posyandus,id',
            'nama_balita'   => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
            'nama_ibu'      => 'required',
        ]);

        $pasien = Pasien::create([
            'posyandu_id'   => $request->posyandu_id,
            'nama_balita'   => $request->nama_balita,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ibu'      => $request->nama_ibu,
            'no_telp_ortu'  => $request->no_telp_ortu,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Pasien Balita Berhasil Ditambahkan!',
            'data'    => $pasien
        ], 201);
    }
}