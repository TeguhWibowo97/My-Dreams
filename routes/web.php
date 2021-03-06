<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard','AdminController@index');
Route::get('/about','AdminController@about');
Route::get('/impian','AdminController@impian');
Route::post('/impian','AdminController@create');
Route::post('/impian/edit/{impian}','AdminController@update');
Route::get('/impian/edit/{impian}','AdminController@edit');
Route::get('/impian/hapus/{impian}','AdminController@hapus');
Route::get('/impian/tercapai','AdminController@tercapai');
Route::get('/impian/belumtercapai','AdminController@belumtercapai');

// Route::get('/impian/edit/{impian}','AdminController@update');