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
Route::get('/test', 'firstController@index');
Route::get('/test/{todo}','firstController@show');
Route::get('/create', 'firstController@create');
Route::post('/create','firstController@store');
Route::get('/test/{todo}/edit','firstController@edit');
Route::Post('/test/{todo}','firstController@update');
Route::get('/test/{todo}/delete','firstController@destroy');
Route::get('/test/{todo}/complete','firstController@complete');
