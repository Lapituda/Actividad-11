<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [MenuController::class, 'index']);
Route::get('/casa', [MenuController::class, 'casa']);
Route::get('/fotos', [MenuController::class, 'fotos']);
Route::get('/contacto', [MenuController::class, 'contacto']);