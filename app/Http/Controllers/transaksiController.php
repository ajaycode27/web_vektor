<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Services\Midtrans\CreateSnapTokenService; // => letakkan pada bagian atas class
class transaksiController extends Controller

{

    public function createtransaksi(Request $request){

        




        $client = new Client([
            "headers" => [
              "Accept" => "application/json",
              "Content-Type" => "application/json",
              "Authorization" => base64_encode('SB-Mid-server-iriP7s-EQY1ETzWsWsmAVIc1')
            ]
          ]);
        
        
        $this -> validate($request, rules: [
          'foto'=> 'required|mimes:jpg,png,jpeg|image|max:2048'
        ]);

        $file_name = $request->foto->getClientOriginalName();
        $foto = $request->foto->storeAs('fotoEksekusi', $file_name);

        transaksi::create([
            'ukuran' => $request->ukuran,
            'paket' => $request->paket,
            'foto' => $foto,
            'jumlahKepala' =>2,
            'harga' => 15000,
            'keterangan' => $request->keterangan,
            'idPelanggan' => '2'
        ]);

        $charge = $client->request('POST', 'https://api.sandbox.midtrans.com/v2/charge', [
            "body" => json_encode([
              "payment_type" => "bank_transfer",
              "transaction_details" => [
                "order_id" => rand(),
                "gross_amount" => "200000"
              ],
              "bank_transfer" => [
                "bank" => "bca"
              ]
            ])
          ]);

          $response = json_decode($charge->getBody());
          return response($charge->getBody());
      

    }
}
