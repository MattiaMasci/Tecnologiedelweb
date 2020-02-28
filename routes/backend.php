<?php

Route::match(['get', 'post'], '/', 'BackController@login');

Route::match(['get', 'post'], '/update-pwd', 'BackController@updPassword');

Route::get('/dashboard', 'BackController@dashboard');

Route::get('/settings', 'BackController@settings');

Route::get('/check-pwd', 'BackController@chkPassword');

Route::get('/logout', 'BackController@logout');

//Categoria

Route::match(['get', 'post'], '/add-category', 'CategoryController@addCategory');
Route::match(['get', 'post'], '/edit-category/{id}', 'CategoryController@editCategory');
Route::match(['get', 'post'], '/delete-category/{id}', 'CategoryController@deleteCategory');
Route::get('/view-categories', 'CategoryController@viewCategories');

//Prodotto

Route::match(['get', 'post'], '/add-product', 'ProductController@addProduct');
