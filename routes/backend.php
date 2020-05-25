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
Route::match(['get', 'post'], '/edit-product/{id}', 'ProductController@editProduct');
Route::get('/delete-product/{id}', 'ProductController@deleteProduct');
Route::get('/view-products', 'ProductController@viewProducts');

//Coupon
Route::match(['get', 'post'], '/add-coupon', 'CouponController@addCoupon');
Route::get('/view-coupons', 'CouponController@viewCoupons');
Route::match(['get', 'post'], '/edit-coupon/{id}', 'CouponController@editCoupon');
Route::get('/delete-coupon/{id}', 'CouponController@deleteCoupon');

//Collezione
Route::match(['get', 'post'], '/add-collection', 'CollectionController@addCollection');
Route::get('/view-collections', 'CollectionController@viewCollections');
Route::match(['get', 'post'], '/edit-collection/{id}', 'CollectionController@editCollection');
Route::get('/delete-collection/{id}', 'CollectionController@deleteCollection');

//Marca
Route::match(['get', 'post'], '/add-brand', 'BrandController@addBrand');
Route::get('/view-brands', 'BrandController@viewBrands');
Route::match(['get', 'post'], '/edit-brand/{id}', 'BrandController@editBrand');
Route::get('/delete-brand/{id}', 'BrandController@deleteBrand');

//Quantità
Route::match(['get', 'post'], '/add-pieces/{id}', 'ProductController@addPieces')->name('addpieces');
Route::get('/delete-pieces/{id}', 'ProductController@deletePieces');

//Ajax per Dropdown
Route::get('/sizesdropdown', 'ProductController@sizesdropdown');
Route::get('/colorsdropdown', 'ProductController@colorsdropdown');
