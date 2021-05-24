<?php


Route::get('/','HomeController@index')->name('welcome');

Auth::routes();

Route::post('/cart','CartController@cart')->name('cart');

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function()
{
	Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
	Route::resource('slider','SliderController');
	Route::resource('category','CategoryController');
	Route::resource('item','ItemController');
	Route::get('cart','CartController@index')->name('cart.index');
});