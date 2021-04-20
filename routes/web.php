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

Route::get('/create','ProductController@create');
Route::post('/store','ProductController@store');
Route::get('/index','ProductController@index');
Route::post('/toBill','ProductController@tobil');
Route::get('/quotation','ProductController@getQoutation');