<?php

use App\Http\Controllers\transaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('v_login');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/portofolio', function () {
    return view('v_portofolio');
});

// // routes/web.php
// Route::post('/checkout', 'Deteksiwajah@prosesDeteksi')->name('deteksi.proses');


Route::get('/checkout', function () {
    return view('v_checkout');
});
Route::get('/checkout2', function () {
    return view('checkout2');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/checkout', [transaksiController::class, 'createtransaksi']);


