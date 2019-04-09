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

Route::get('/', [
    'uses'=>'BukuTamuController@show',
    'as'=>'show'
]);
Route::get('/admin',[
    'uses'=>'BukuTamuController@admin',
    'as'=>'admin'
]);
Route::post('/create',[
    'uses'=>'BukuTamuController@create',
    'as'=>'create'
]);
