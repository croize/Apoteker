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
//Resep Route
Route::resource('resep', 'ResepController');
Route::get('/resep/delete/{id}','ResepController@destroy');
//End Route

Route::resource('pendaftaran', 'PendaftaranController');
Route::get('/pendaftaran/delete/{id}','PendaftaranController@destroy');

Route::resource('dokter', 'DokterController');
Route::get('/dokter/delete/{id}','DokterController@destroy');

Route::resource('poli', 'PoliklinikController');
Route::get('/poli/delete/{id}','PoliklinikController@destroy');

Route::get('/obat','ObatController@index');
Route::get('/obat/create','ObatController@create');
Route::post('/obat/store','ObatController@store');
Route::get('/obat/edit/{id}','ObatController@edit');
Route::post('/obat/update/{id}','ObatController@update');
Route::get('/obat/delete/{id}','ObatController@destroy');

Route::resource('pembayaran', 'PembayaranController');
Route::get('/pembayaran/delete/{id}','PembayaranController@destroy');

Route::resource('detail', 'DetailController');
Route::get('/detail/delete/{id}','DetailController@destroy');

Route::resource('pasien', 'PasienController');
Route::get('/pasien/delete/{id}','PasienController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
