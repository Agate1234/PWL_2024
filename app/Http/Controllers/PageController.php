<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "Nama: Fa'iz Abiyu Atha Fawas <br> NIM: 2241760068";
    }

    public function articles($id) {
        return "Halaman Artikel dengan Id: $id";
    }
}
