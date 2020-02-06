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

Route::get('/', 'FrontEndController@home');

Route::get('/cart', 'FrontEndController@cart');

Route::get('/contact', 'FrontEndController@contact');

Route::get('/product', 'FrontEndController@product');

Route::get('/product-detail', 'FrontEndController@productdetail');

Route::get('/account', 'FrontEndController@account');

Route::get('/wishlist', 'FrontEndController@wishlist')->middleware('auth');

Route::get('/error', 'FrontEndController@error');

Route::get('/checkout', 'FrontEndController@checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
