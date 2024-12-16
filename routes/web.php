<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;

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

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

//ets
Route::get('/ets', function () {
    return view('ets');
});

Route::get('/5026221138', function () {
    return view('5026221138');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/linktree', function () {
    return view('linktree');
});
Route::get('/responsive1', function () {
    return view('responsive1');
});
Route::get('/style', function () {
    return view('style');
});
Route::get('/style2', function () {
    return view('style2');
});


//bedak
Route::get('/bedak','App\Http\Controllers\BedakController@index2');
Route::get('/bedak/tambah','App\Http\Controllers\BedakController@tambah2');
Route::post('/bedak/store','App\Http\Controllers\BedakController@store');
Route::get('/bedak/edit/{id}','App\Http\Controllers\BedakController@edit2');
Route::post('/bedak/update','App\Http\Controllers\BedakController@update');
Route::get('/bedak/hapus/{id}','App\Http\Controllers\BedakController@hapus');
Route::get('/bedak/cari','App\Http\Controllers\BedakController@cari');


Route::get('/keranjangbelanja', 'App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/create', 'App\Http\Controllers\KeranjangBelanjaController@create');
Route::post('/keranjangbelanja/store', 'App\Http\Controllers\KeranjangBelanjaController@store');
Route::delete('keranjangbelanja/destroy/{ID}', 'App\Http\Controllers\KeranjangBelanjaController@destroy');
