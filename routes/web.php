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


Route::get('/', function () {
    return view('welcome');
}); */

//Route menampilkan data mahasiswa
Route::get('/mahasiswas','MahasiswaController@index')->name('mahasiswas.index');

//Route mengakses view form tambah data mahasiswa
Route::get('/mahasiswas/create','MahasiswaController@create')->name('mahasiswas.create');

//Route menampilkan data mahasiswa
Route::post('/mahasiswas','MahasiswaController@store')->name('mahasiswas.store');

//Route untuk mengakses detail data
Route::get('/mahasiswas/{mahasiswa}','MahasiswaController@detail')->name('mahasiswas.detail');

//Route untuk menampilkan form update
Route::get('/mahasiswas/{mahasiswa}/edit','MahasiswaController@edit')->name('mahasiswas.edit');

//Route untuk update data ke dalam database
Route::put('/mahasiswas/{mahasiswa}','MahasiswaController@update')->name('mahasiswas.update');

//Route untuk menghapus data mahasiswa
Route::delete('/mahasiswas/{mahasiswa}','MahasiswaController@delete')->name('mahasiswas.delete');
