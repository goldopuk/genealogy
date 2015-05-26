<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'Home@index');
Route::get('/category/{id}', 'Home@category');
Route::get('/product/{id}', 'Home@product');
Route::post('/addtocart', 'Home@addToCart');
Route::post('/removefromcart', 'Home@removeFromCart');
Route::get('/showcart', 'Home@showCart');
Route::get('/reset', 'Home@reset');
Route::get('/search', 'Home@search');
Route::get('/checkout', 'Home@checkout');
Route::post('/saveorder', 'Home@saveOrder');
