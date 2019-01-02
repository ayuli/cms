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

Route::get('/', function () {
    return view('welcome');
});

// 路由
Route::get('/user/add','User\user@add');
Route::get('/user/update/{id}','User\user@update');
Route::get('/user/delete/{id}','User\user@delete');
Route::get('/user/show','User\user@show');

