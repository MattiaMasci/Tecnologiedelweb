<?php

Route::match(['get', 'post'], '/home', 'FrontController@home')->name('home');

Route::get('/cart', 'FrontController@cart');

Route::get('/contact', 'FrontController@contact');

Route::get('/request-password', 'FrontController@requestpassword');

Route::get('/reset-password/{token}&{email}', 'FrontController@resetpassword')->name('newpassword');

Route::get('/product/{genere}&&{categoria}', 'FrontController@product');

Route::get('/product-detail/{genere}&&{id}', 'FrontController@productdetail');

Route::get('/registration', 'FrontController@account');

Route::get('/wishlist', 'FrontController@wishlist')->middleware('auth');

Route::get('/error', 'FrontController@error');

Route::get('/checkout', 'FrontController@checkout');

Route::get('/order', 'FrontController@orderproducts');


