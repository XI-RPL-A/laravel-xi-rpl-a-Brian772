<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return 'Hi! Selamat Datang di Website Laravel';
// });
// Route::get('/index', function () {
//     return view('index', ['title' => 'Index Page']);
// });
// Route::get('/about', function () {
//     return view('about', ['title' => 'About Page', 'nis' => '25978', 'nama' => 'Brian Ardhisswara', 'kelas' => 'XI RPA']);
// });
// Route::get('/article/{id}', function ($id) {
//     return 'Halaman Artikel ke-' . $id;
// });


Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/index', [PageController::class, 'index']);
Route::get('/article/{id}', [PageController::class, 'article']);