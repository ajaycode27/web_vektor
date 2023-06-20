<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('v_home');
    }

    public function create (Request $request)
{
// menyimpan data file yang diupload ke variabel $file
$file = $request->file('file');
 
// nama file
echo 'File Name: '.$file->getClientOriginalName();
echo '<br>';

// ekstensi file
echo 'File Extension: '.$file->getClientOriginalExtension();
echo '<br>';

// real path
echo 'File Real Path: '.$file->getRealPath();
echo '<br>';

// ukuran file
echo 'File Size: '.$file->getSize();
echo '<br>';

// tipe mime
echo 'File Mime Type: '.$file->getMimeType();

// isi dengan nama folder tempat kemana file diupload
$tujuan_upload = 'data_file';

// upload file
$file->move($tujuan_upload,$file->getClientOriginalName());
    
    $img = public_path($request->foto);

    $result = shell_exect("py" . app_path() . "\Http\Controllers\test.py" . $img);
    var_dump ($result);
    die();
}
}
