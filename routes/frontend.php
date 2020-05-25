<?php

Route::match(['get', 'post'], '/home', 'FrontController@home')->name('home');

Route::match(['get', 'post'], '/cart', 'FrontController@cart');

Route::match(['get', 'post'], '/contact', 'FrontController@contact');

Route::get('/request-password', 'FrontController@requestpassword');

Route::get('/reset-password/{token}&{email}', 'FrontController@resetpassword')->name('newpassword');

Route::match(['get', 'post'], '/product/{genere}&&{categoria}', 'FrontController@product')->name('product');

Route::match(['get', 'post'], '/collezione/{collezione}', 'FrontController@product')->name('product');

Route::match(['get', 'post'], '/brand/{genere}&&{brand}', 'FrontController@product')->name('product');

Route::match(['get', 'post'], '/product-detail/{genere}&&{id}', 'FrontController@productdetail');

Route::get('/registration', 'FrontController@account');

Route::match(['get', 'post'], '/wishlist', 'FrontController@wishlist');

Route::match(['get', 'post'], '/error', 'FrontController@error');

Route::match(['get', 'post'], '/checkout', 'FrontController@checkout');

//Cancella elemento nel carrello
Route::get('/delete-cart/{modello}', 'FrontController@deleteCart');

//Cancella elemento nella wishlist
Route::get('/delete-wishlist/{modello}', 'FrontController@deleteWishlist');

//Ajax per ordinare
Route::get('/order', 'FrontController@orderproducts');

//Ajax per filtrare per prezzo
Route::get('/filter', 'FrontController@filterproducts');

//Ajax per filtro colore
Route::get('/filtrapercolore', 'FrontController@filterColor');

//Ajax per color select
Route::get('/colorselect', 'FrontController@colorSelect');

//Ajax per caricare informazioni checkout
Route::get('/load-info', 'FrontController@loadInfo');

//Ajax per size select
Route::get('/sizeselect', 'FrontController@sizeSelect');

//Ajax per aggiungere elemento alla wishlist
Route::get('/add-wishlist', 'FrontController@addWishlist');

//Ajax per elenco categorie
Route::get('/elencocategorie', 'FrontController@elencoCategorie');

//Ajax per wishlist
Route::get('/wishlistcall', 'FrontController@wishlistCall');
Route::get('/wishlistuncall', 'FrontController@wishlistUncall');
