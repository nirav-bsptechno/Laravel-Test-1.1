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

Route::get('/', ['as' => 'productDetails', 'uses' => 'ProductController@productDetails']);

Route::get('/add-product', ['as' => 'add-product', 'uses' => 'ProductController@add_product']);