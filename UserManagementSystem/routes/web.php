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

Route::get('/user/create','UserController@createForm')->name("createForm"); 
Route::post('/user/create','UserController@create'); 
Route::get('/user/list','UserController@list')->name("user_list"); 
Route::get('/user/update/{user_id}','UserController@updateForm')->name("updateUser"); 
Route::post('/user/update/{user_id}','UserController@saveUpdate');
Route::get('/user/delete/{user_id}','UserController@delete')->name("delete"); 