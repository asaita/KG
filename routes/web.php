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
    return view('welcome');
});

Route::view('/anasayfa','anasayfa');
Route::get('/kategori/{slug_kategoriadi}','App\Http\Controllers\kategoriController@index')->name('kategori');
Route::view('/urun','urun');
Route::view('/sepet','sepet');
