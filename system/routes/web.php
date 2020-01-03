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

Route::get('/admin','AdminController@Login')->name('Login');

Route::post('/admin','OperasionalController@LoginAdmin');
Route::post('/LoginAdmin','OperasionalController@LoginAdmin');





Route::get('/data_admin','DataController@LoadingPage')->name('show_data');


Route::get('/tambah_penawaran','TambahPenawaranController@index')->name('tambah_penawaran');
Route::post('/tambah_penawaran','OperasionalController@index_tambah');


Route::get('/data_pelanggan','DataPelangganController@index')->name('data_pelanggan');
Route::get('/data_promo','DataPromoController@index')->name('data_promo');

Route::get('/admin_lgout','OperasionalController@Logout')->name('logout');


Route::get('/edit/{id}','OperasionalController@index_edit')->name('edit');
Route::post('/edit/{id}','OperasionalController@post_edit');

Route::get('/data_admin/{id}','OperasionalController@index_delete')->name('delete');


