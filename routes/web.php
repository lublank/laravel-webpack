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

//index route （首页路由）
Route::get('/', 'IndexController@getIndexPage')->name('index');

// prefix 统一路径前缀
//Route::group(['prefix' => 'user'], function () {
//    Route::get('account', 'UserController@getAccount');
//});