<?php

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
    return view('index');
})->name('i');
Route::get('/Gaming', function () {
    return view('gaming');
})->name('g');
Route::get('/Novedades', function () {
    return view('novedades');
})->name('n');
Route::get('/Peliculas', function () {
    return view('peliculas');
})->name('p');
