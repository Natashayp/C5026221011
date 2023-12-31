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

Route::get('halo', function () {
    //bisa diisi program apa saja
    return "Halo Apa Kabar";
});

Route::get('halo2', function () {
    return "<h1>Halo Apa Kabar</h1>";
});

// Route::get('blog', function () {
//     return view('blog');
// });

Route::get('Linktree', function () {
    return view('Linktree');
});

Route::get('textColors', function(){
    return view('textColors');
});

Route::get('layout', function () {
    return view('layout');
});

Route::get('js1', function (){
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('css', function () {
    return view('css');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('responsive2', function () {
    return view('responsive2');
});

Route::get('link', function () {
    return view('link');
});

Route::get('diva', function () {
    return view('hello');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('contact');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@lihat');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index2');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@indexNilai');
Route::get('/nilaikuliah/tambahNilai','App\Http\Controllers\NilaiController@tambahNilai');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

Route::get('/sepedamotor','App\Http\Controllers\sepedamotorController@indexsepedamotor');
Route::get('/sepedamotor/tambahsepedamotor','App\Http\Controllers\sepedamotorController@tambahsepedamotor');
Route::post('/sepedamotor/store','App\Http\Controllers\sepedamotorController@store');
Route::get('/sepedamotor/editsepedamotor/{kodesepedamotor}','App\Http\Controllers\sepedamotorController@editsepedamotor');
Route::post('/sepedamotor/update','App\Http\Controllers\sepedamotorController@update');
Route::get('/sepedamotor/hapus/{kodesepedamotor}','App\Http\Controllers\sepedamotorController@hapus');
Route::get('/sepedamotor/viewsepedamotor/{kodesepedamotor}','App\Http\Controllers\sepedamotorController@viewsepedamotor');
Route::get('/sepedamotor/cari','App\Http\Controllers\sepedamotorController@cari');

//MOBIL
Route::get('/mobil','App\Http\Controllers\MobilController@index');
Route::get('/mobil/tambah','App\Http\Controllers\MobilController@tambah');
Route::post('/mobil/store','App\Http\Controllers\MobilController@store');
Route::get('/mobil/edit/{kodemobil}','App\Http\Controllers\MobilController@edit');
Route::post('/mobil/update','App\Http\Controllers\MobilController@update');
Route::get('/mobil/hapus/{kodemobil}','App\Http\Controllers\MobilController@hapus');
Route::get('/mobil/view/{kodemobil}','App\Http\Controllers\MobilController@view');
Route::get('/mobil/cari','App\Http\Controllers\MobilController@cari');

//EAS
Route::get('/chat','App\Http\Controllers\ChatController@index');
