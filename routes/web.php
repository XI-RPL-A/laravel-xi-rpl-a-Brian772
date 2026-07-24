<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return 'Hi! Selamat Datang di Website Laravel';
// });

// Route::get('/about', function () {
//   return view('about', ['title' => 'about', 'nis' => '25978', 'nama' => 'Brian Ardhisswara', 'kelas' => 'XI RPA']);
// });

// Route::get('/article/{id}', function($id) {
//   return 'Halaman Artikel ke-' . $id;
// });

// Route::get('/index', function () {
//   return 'Brian Ardhisswara';
// });

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/article/{id}', [PageController::class, 'article'])->name('article');