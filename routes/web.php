<?php

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

Route::resource('resep', 'ResepController');
Route::resource('pendaftaran', 'PendaftaranController');
Route::resource('dokter', 'DokterController');
Route::resource('poli', 'PoliklinikController');

Route::get('/obat','ObatController@index');
Route::get('/obat/create','ObatController@create');
Route::post('/obat/store','ObatController@store');
Route::get('/obat/edit/{id}','ObatController@edit');
Route::post('/obat/update/{id}','ObatController@update');
Route::get('/obat/delete/{id}','ObatController@destroy');
