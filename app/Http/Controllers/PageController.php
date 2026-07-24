<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Hi! Selamat Datang di Website Laravel';
    }

    public function about()
    {
        return view('about', ['title' => 'About Page', 'nis' => '25978', 'nama' => 'Brian Ardhisswara', 'kelas' => 'XI RPA']);
    }

    // public function article($id) {
    //     return 'Halaman Artikel ke-' . $id;
    // }
    public function article($id)
    {
        return view('article', ['id' => $id]);
    }


    
    public function home() {
        return 'Ini halaman Home';
    }
    public function productCategory($slug) {
        return 'Ini halaman Product Category ' . $slug;
    }
    public function news($slug = null) {
        if ($slug) {
            return 'Ini halaman News ' . $slug;
        } else {
            return 'Menampilkan semua news';
        }
    }
    public function program($slug) {
        return 'Ini halaman Program ' . $slug;
    }
    public function aboutUs() {
        return 'Ini halaman About Us';
    }

}
