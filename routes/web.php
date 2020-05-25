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

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

//BACKEND

Route::get('store-image', 'StoreImageController@index');

Route::post('store-image/insert-image', 'StoreImageController@insert_image');

Route::post('store-image/insert-altre', 'StoreImageController@insert_altre');

Route::get('store-image/fetch-image/{id}', 'StoreImageController@fetch_image');

Route::get('store-image/fetch-altre/{id}', 'StoreImageController@fetch_altre');

Route::get('store-image/fetch-collection-image/{id}', 'StoreImageController@fetch_collection_image');

Route::get('store-image/fetch-brand-image/{id}', 'StoreImageController@fetch_brand_image');

