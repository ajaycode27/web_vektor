<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeteksiWajah extends Controller
{
    public function prosesDeteksi(Request $request)
    {
        // Ambil data gambar dari permintaan
        $gambar = $request->file('foto');

        // Simpan gambar sementara di direktori penyimpanan Laravel
        $path = $gambar->store('temp');

        // Tentukan path ke skrip Python
        $scriptPath = public_path('python/contoh_deteksi_wajah.py');

        // Eksekusi skrip Python
        $output = shell_exec("python {$scriptPath} {$path}");


        // Kembalikan respon
        return response()->json(['output' => $output]);
}
}