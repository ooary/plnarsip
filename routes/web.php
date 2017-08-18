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
    return view('dashboard.index');
});


Route::get('/pegawai','UsersController@index')->name('user.index');
Route::post('/pegawai','UsersController@store')->name('user.store');
Route::get('/pegawai/tambah','UsersController@create')->name('user.add');
Route::get('/pegawai/edit/{id}','UsersController@edit')->name('user.edit');
Route::put('/pegawai/{id}','UsersController@update')->name('user.update');
Route::delete('/pegawai/delete/{id}','UsersController@destroy')->name('user.destroy');
