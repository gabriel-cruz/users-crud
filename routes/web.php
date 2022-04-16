<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::group(['middleware' => 'web'], function (){
    Route::get('/', 'App\Http\Controllers\HomeController@index');
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
});

Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/create', 'App\Http\Controllers\UserController@create');
Route::post('/load_cities', 'App\Http\Controllers\UserController@loadCities');
Route::post('/users/add', 'App\Http\Controllers\UserController@add');
