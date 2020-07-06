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

Route::get('/pertanyaan/create', 'PertanyaanController@create'); // menampilkan halaman forms
Route::post('/pertanyaan', 'PertanyaanController@store'); // menyimpan data
Route::get('/pertanyaan', 'PertanyaanController@index'); // menampilkan semua tabel berisi data pertanyaan
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); // menampilkan detail Pertanyaan dengan id
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); // menampilkan form untuk edit Pertanyaan
Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); // menyimpan perubahan dari form edit
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); // menghapus data dengan id
Route::get('/jawaban/{id}', 'JawabanController@index');
Route::put('/jawaban/{id}', 'JawabanController@store');
