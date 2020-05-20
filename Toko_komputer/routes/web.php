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

// Route::get('/barang', 'BarangController@index');

// Route::get('/barang/create', 'BarangController@create');

// Route::get('/barang/{barang}', 'BarangController@show');

// Route::post('/barang', 'BarangController@store');

// Route::delete('/barang/{barang}', 'BarangController@destroy');

// Route::get('/barang/{barang}/edit', 'BarangController@edit');

// Route::patch('/barang/{barang}', 'BarangController@update');

Route::resource('barang', 'BarangController');


Route::get('/toko', 'NamatokoController@index');
