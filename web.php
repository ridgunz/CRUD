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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('pasien','PasienController@index');
Route::post('pasien/create','PasienController@create');

Route::get('dokter','DokterController@index');
Route::post('dokter/create','DokterController@create');
Route::get('dokter/{id_dokter}/edit','DokterController@edit');