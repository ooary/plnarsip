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
	Route::get('/sert', 'DashboardController@sertifikat');
	Route::get('/sert/{id}', 'DashboardController@downloadsertifikat');

	Route::get('/med', 'DashboardController@mcu');
	Route::get('/med/{id}', 'DashboardController@downloadmcu');

	Route::get('/myads', 'DashboardController@ads');
	Route::get('/myads/{id}', 'DashboardController@downloadads');

	Route::get('/myskpp', 'DashboardController@skpp');
	Route::get('/myskpp/{id}', 'DashboardController@downloadskpp');

	Route::get('/mysppd', 'DashboardController@sppd');
	Route::get('/mysppd/{id}', 'DashboardController@downloadsppd');

	Route::get('/mysic', 'DashboardController@sppd');
	Route::get('/mysic/{id}', 'DashboardController@downloadsppd');



	
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
		/**
		 *
		 * SERTIFIKAT ROUTE
		 *
		 */
		
		Route::get('/arsip','ArsipController@index')->name('arsip.index');
		Route::get('/arsip/show/{id}','ArsipController@show')->name('arsip.show');
		Route::get('/arsip/show/{id}/sertifikat','ArsipController@sertifikat')->name('arsip.sertifikat');
		Route::post('/arsip/sertifikat','ArsipController@uploadSertifikat')->name('arsip.uploadSertifikat');
		Route::delete('/arsip/show/{id}/sertifikat/delete','ArsipController@deleteSertifikat')->name('arsip.destroysertifikat');
	    Route::get('arsip/download/sertifikat/{id}','ArsipController@downloadSertifikat');
	    /**
	     *
	     * MCU ROUTE
	     *
	     */
		Route::get('/arsip/show/{id}/mcu','ArsipController@mcu')->name('arsip.mcu');
		Route::post('/arsip/mcu','ArsipController@uploadMcu')->name('arsip.uploadmcu');
		Route::delete('/arsip/show/{id}/mcu/delete','ArsipController@deleteMcu')->name('arsip.destroymcu');
	    Route::get('arsip/download/mcu/{id}','ArsipController@downloadMcu');
	    /**
	     *
	     * ADS ROUTE
	     *
	     */
		Route::get('/arsip/show/{id}/ads','ArsipController@ads')->name('arsip.ads');
		Route::post('/arsip/ads','ArsipController@uploadAds')->name('arsip.uploadads');
		Route::delete('/arsip/show/{id}/ads/delete','ArsipController@deleteAds')->name('arsip.destroyads');
	    Route::get('arsip/download/ads/{id}','ArsipController@downloadAds');
	      /**
	     *
	     * SKPP ROUTE
	     *
	     */
		Route::get('/arsip/show/{id}/skpp','ArsipController@skpp')->name('arsip.skpp');
		Route::post('/arsip/skpp','ArsipController@uploadSkpp')->name('arsip.uploadskpp');
		Route::delete('/arsip/show/{id}/skpp/delete','ArsipController@deleteSkpp')->name('arsip.destroyskpp');
	    Route::get('arsip/download/skpp/{id}','ArsipController@downloadSkpp');
	     /**
	     *
	     * SKPP ROUTE
	     *
	     */
		Route::get('/arsip/show/{id}/sppd','ArsipController@sppd')->name('arsip.sppd');
		Route::post('/arsip/sppd','ArsipController@uploadSppd')->name('arsip.uploadsppd');
		Route::delete('/arsip/show/{id}/sppd/delete','ArsipController@deleteSppd')->name('arsip.destroysppd');
	    Route::get('arsip/download/sppd/{id}','ArsipController@downloadSppd');
	     /**
	     *
	     * SIC ROUTE
	     *
	     */
		Route::get('/arsip/show/{id}/sic','ArsipController@sic')->name('arsip.sic');
		Route::post('/arsip/sic','ArsipController@uploadSic')->name('arsip.uploadsic');
		Route::delete('/arsip/show/{id}/sic/delete','ArsipController@deleteSic')->name('arsip.destroysic');
	    Route::get('arsip/download/sic/{id}','ArsipController@downloadSic');

	    

	});
	

	$this->get('logout', 'Auth\LoginController@logout');

});

