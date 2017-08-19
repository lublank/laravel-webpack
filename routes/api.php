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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// prefix 统一前缀， middleware 中间件
//Route::group(['prefix' => 'individual','middleware' => 'isLogin'], function () {
//    Route::get('account', 'UtilController@accountById');
//
//});