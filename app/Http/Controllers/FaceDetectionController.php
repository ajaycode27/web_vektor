<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cv2;

class FaceDetectionController extends Controller
{
    public function detectFaces(Request $request)
    {
        // Validasi file gambar yang diunggah
        $request->validate([
            'image' => 'required|image',
        ]);

        // Baca gambar
        $imagePath = $request->file('image')->getPathname();
        $img = cv2\imread($imagePath);

        // Muat model deteksi objek Haar Cascade untuk deteksi wajah
        $faceCascadePath = storage_path('app/haarcascade_frontalface_default.xml');
        $faceCascade = new cv2\CascadeClassifier($faceCascadePath);

        // Ubah gambar menjadi skala abu-abu
        $gray = cv2\cvtColor($img, cv2\COLOR_BGR2GRAY);

        // Lakukan deteksi wajah
        $faces = $faceCascade->detectMultiScale($gray, 1.1, 4);

        // Hitung jumlah wajah yang ditemukan
        $numFaces = count($faces);

        // Tampilkan jumlah wajah
        return response()->json(['num_faces' => $numFaces]);
    }
}
