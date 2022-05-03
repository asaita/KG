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
Route::get('/urun/{slug_urunadi}','App\Http\Controllers\urunController@index')->name('urun');
Route::get('/sepet','App\Http\Controllers\sepetController@index')->name('sepet');
Route::get('/odeme','App\Http\Controllers\odemeController@index')->name('odeme');
Route::get('/siparisler','App\Http\Controllers\siparislerController@index')->name('siparisler');
Route::get('/siparisler/{id}','App\Http\Controllers\siparislerController@detay')->name('siparis');

Route::get('/kullanici/oturumac','App\Http\Controllers\kullaniciController@giris_form')->name('kullanici.oturumac');
Route::get('/kullanici/kaydol','App\Http\Controllers\kullaniciController@kayit_form')->name('kullanici.kaydol');
