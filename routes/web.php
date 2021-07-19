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

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');

Route::get('tambah-mahasiswa', 'MahasiswaController@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');

//Route Makul

Route::get('makul', 'makulController@index')->name('makul');

Route::get('tambah-makul', 'makulController@create')->name('tambah.makul');
Route::post('simpan-makul', 'makulController@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'makulController@edit')->name('makul.edit');

//Route Nilai

Route::get('nilai', 'NilaiController@index')->name('nilai');

Route::get('nilai-create', 'NilaiController@create')->name('nilai.create');

Route::post('nilai-simpan', 'NilaiController@store')->name('nilai.simpan');

Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('nilai.edit');

Route::post('nilai-update/{id}', 'NilaiController@update')->name('nilai.update');

Route::get('nilai-hapus/{id}', 'NilaiController@destroy')->name('nilai.hapus');