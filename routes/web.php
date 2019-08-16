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
//route kelas
Route::get('/tampil', 'TampilController@index');
Route::get('/dress', 'DressController@index');
Route::get('/pembeli', 'PembeliController@index');

Route::get('/dress/create', 'DressController@create');
Route::post('/dress', 'DressController@store');

Route::get('/pembeli/create', 'PembeliController@create');
Route::post('/pembeli', 'PembeliController@store');

//route edit
Route::get('/dress/{id}/edit', 'DressController@edit');
Route::patch('/dress/{id}', 'DressController@update');
Route::get('/pembeli/{id}/edit', 'PembeliController@edit');
Route::patch('/pembeli/{id}', 'PembeliController@update');


//route delete
Route::delete('/dress/{id}', 'DressController@destroy');
Route::delete('/pembeli/{id}', 'PembeliController@destroy');