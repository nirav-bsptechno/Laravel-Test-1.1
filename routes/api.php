<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('api_add_data', ['as' => 'api_add_data','uses' =>'ProductController@api_add_data']);

Route::post('get_add_data', ['as' => 'get_add_data','uses' =>'ProductController@get_add_data']);

Route::post('edit_add_data', ['as' => 'edit_add_data','uses' =>'ProductController@edit_add_data']);
