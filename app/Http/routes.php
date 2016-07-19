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

Route::get('/products/{brand}', [
    'uses' => 'PageController@getProducts',
    'as' => 'products'
]);

Route::get('/category/{category}', [
    'uses' => 'PageController@getCategory',
    'as' => 'category'
]);