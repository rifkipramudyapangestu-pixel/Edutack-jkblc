<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar-route',function(){
    return "Selamat Datang Di Halaman Belajar-Route";
});

Route::match(['get','post'], 'belajar-route', function(){
    return "Ini Halaman belajar-route";
});

Route::redirect('route','new-route');

Route::get('new-route', function() {
    return "Ini Halaman Route Baru";
});

Route::get('/belajar-route/{page}', function($page){
    return "Hello, Ini Halaman Belajar Route $page";
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/profile', function() {
 
    $nama = "RifkiPramudyaP";
    $prodi = "TRPL";
    $kelas = "1A";

    return view('profile', [
        'nama' => $nama,
        'prodi' => $prodi,
        'kelas' => $kelas
    ]);
});   

Route::get('/percabangan', function () {
    $umur = 20;
    $nilai = 80;
    return view("percabangan", ['umur' => $umur, 'nilai' => $nilai]);
});

Route::get('/perulangan', function () {
    $produk = ["Laptop", "Mouse", "Keyboard", "Komputer", "Handphone", "Hardisk"];
    return view('perulangan', ['produk' => $produk]);
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/umur', [MahasiswaController::class, 'tampilUmur']);

Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tampilForm']);
Route::post('/mahasiswa/proses', [MahasiswaController::class, 'prosesForm']);