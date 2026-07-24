<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/index', function() {
  return 'Brian Ardhisswara';
});

Route::get('/home', [PageController::class, 'home'])->name('home');