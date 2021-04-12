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


Route::get('/siswa', "SiswaController@index");
Route::post('/siswa/create', 'SiswaController@create');


// Route buat edit
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::post('/siswa/{id}/update', 'SiswaController@update');

// Route Delete
Route::get('siswa/{id}/delete', 'SiswaController@delete');
// Route::get('/', [HomeController::class, 'index']);