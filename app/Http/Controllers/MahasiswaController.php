<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $nama = "Budi";
        $mata_kuliah = ["Pemgrograman Web", "Basis Data", "Kecerdasan Buatan"];

        return view('biodata', ['nama' => $nama, 'mata_kuliah' => $mata_kuliah]);
    } 

    public function tampilUmur($umur) {
        return view('umur', ['umur' => $umur]);
    }

    public function tampilForm() {
        return view('form_tambah');
    }

    public function prosesForm(Request $request) {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        return view('hasil_form', ['namaMahasiswa' => $nama, 'alamatMahasiswa' => $alamat]);
    }
}
