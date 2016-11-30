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

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
*/

//Endpoint untuk membuat user / register
Route::get('/users', 'UserController@listUser');
Route::post('/users', 'UserController@createUser');
Route::put('/users/{id}', 'UserController@updateUser');
