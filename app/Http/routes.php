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

Route::get('/', [
    'uses' => 'PageController@getIndex',
    'as' => 'home'
]);

Route::get('about', [
    'uses' => 'PageController@getAbout',
    'as' => 'about'
]);

Route::get('contacts', [
    'uses' => 'PageController@getContacts',
    'as' => 'contacts'
]);

Route::get('/products/{brand}', [
    'uses' => 'ProductController@getProducts',
    'as' => 'products'
]);

Route::get('/category/{category}', [
    'uses' => 'CategoryController@getCategory',
    'as' => 'category'
]);

Route::post('cart', [
    'uses' => 'CartController@postCart',
    'as' => 'addToCart'
]);

Route::get('cart', [
    'uses' => 'CartController@getCart',
    'as' => 'show.cart'
]);

Route::get('cart/{id}', [
    'uses' => 'CartController@getUpdateCart',
    'as' => 'update.cart'
]);

Route::get('clear-cart', [
    'uses' => 'CartController@clearCart',
    'as' => 'clear.cart'
]);
Route::auth();

Route::get('/home', 'HomeController@index');
