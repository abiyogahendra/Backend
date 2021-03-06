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
Route::group([
    'middleware' => ['check.auth']
], function () {


    Route::get('/data_admin','DataController@LoadingPage')->name('show_data');

   

    


    //Route data Promo
    Route::get('/data_promo','DataPromoController@index')->name('data_promo');
    Route::get('/tambah_promo','TambahPromoController@index')->name('tambah_promo');
    // Route::get('/edit_promo/{id}','DataPromoController@edit_promo')->name('edit_promo');
    // Route::post('/edit_promo/{id}','DataPromoController@post_edit_promo');
    Route::post('/tambah_promo','OperasionalController@tambah_promo');
    Route::get('/tambah_promo/{id}','OperasionalController@promo_delete')->name('promo_delete');

    //Route data penawaran
    Route::get('/data_admin/{id}','OperasionalController@index_delete')->name('delete');
    Route::get('/tambah_penawaran','TambahPenawaranController@index')->name('tambah_penawaran');
    Route::get('/edit/{id}','OperasionalController@index_edit')->name('edit');
    Route::post('/edit/{id}','OperasionalController@post_edit');
    Route::post('/tambah_penawaran','OperasionalController@index_tambah');

    //Route pelanggan
    Route::get('/data_pelanggan','DataPelangganController@index')->name('data_pelanggan');

    //Route Onderdil
    Route::get('/data_onderdil','DataOnderdilController@index')->name('data_onderdil');
    Route::get('/edit/{id}','DataOnderdilController@edit_onderdil')->name('edit_onderdil');
    Route::post('/edit/{id}','DataOnderdilController@post_edit_onderdil');
    Route::get('delete_onderdil/{id}','DataOnderdilController@hapus_onderdil')->name('hapus_onderdil');
    Route::get('/tambah_onderdil','DataOnderdilController@tampil_tambah')->name('tambah_onderdil');
    Route::POST('/tambah_onderdil','DataOnderdilController@tambah_onderdil');


    //Route data pemesanan
    Route::get('/pemesanan','PemesananController@index')->name('data_pemesanan');
    Route::get('delete/{id}','PemesananController@hapus_pemesanan')->name('hapus_pemesanan');
}

);


//Route login admin


Route::get('/admin','AdminController@Login')->name('Login');

Route::get('logout','LoginController@logout')->name('logout');
Route::post('/admin','OperasionalController@LoginAdmin');
Route::post('/LoginAdmin','OperasionalController@LoginAdmin');