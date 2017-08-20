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
$this->get('/login','Auth\LoginController@showLoginForm');
$this->post('/login','Auth\LoginController@login');


Route::group(['middleware'=>'auth'],function(){
	Route::get('/', 'DashboardController@index');
	Route::group(['middleware'=>'role:pegawai'],function(){
	/**
	 *
	 * Route for arsip User
	 *
	 */

	Route::get('/arsip','ArsipController@index')->name('arsip.index');
	Route::post('/arsip/show/{id}','ArsipController@show')->name('arsip.show');
	});

	Route::group(['middleware'=>'role:admin'],function(){
		/**
		 *
		 * Route for arsip Admin
		 *
		 */
		Route::get('/arsipku','ArsipkuController@index')->name('arsipku.index');
		Route::get('/arsipku/sertifikat','ArsipkuController@sertifikat')->name('sertifikat.add');
		Route::post('/arsipku/sertifikat','ArsipkuController@uploadSertifikat')->name('sertifikat.upload');
		Route::delete('/arsipku/sertifikat/{id}','ArsipkuController@deleteSertifikat')->name('sertifikat.destroy');
		/**
		 *
		 * Route for Pegawai
		 *
		 */

		Route::get('/pegawai','UsersController@index')->name('user.index');
		Route::post('/pegawai','UsersController@store')->name('user.store');
		Route::get('/pegawai/tambah','UsersController@create')->name('user.add');
		Route::get('/pegawai/edit/{id}','UsersController@edit')->name('user.edit');
		Route::put('/pegawai/{id}','UsersController@update')->name('user.update');
		Route::delete('/pegawai/delete/{id}','UsersController@destroy')->name('user.destroy');
	});
	

	$this->get('logout', 'Auth\LoginController@logout');

});

