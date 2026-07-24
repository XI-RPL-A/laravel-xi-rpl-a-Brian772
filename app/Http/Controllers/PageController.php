<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index() {
      return 'Hi! Selamat Datang di Website Laravel';
  }

    public function about() {
        return view('about', ['title' => 'About Page', 'nis' => '25978', 'nama' => 'Brian Ardhisswara', 'kelas' => 'XI RPA']);
    }

    // public function article($id) {
    //     return 'Halaman Artikel ke-' . $id;
    // }
    public function article($id) {
        return view('article', ['id' => $id]);
    }
}
