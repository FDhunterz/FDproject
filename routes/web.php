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

Route::get('/ping','ping\pingController@index')->name('index');
Route::get('/ping','ping\pingController@index')->name('home');
Route::get('/post','ping\pingController@coba')->name('post');