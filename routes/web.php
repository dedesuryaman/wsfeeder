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


Route::get('login', 'App\Http\Controllers\Api\UserController@login');
Route::get('register', 'App\Http\Controllers\Api\UserController@register');
Route::get('forget', 'App\Http\Controllers\Api\UserController@forget');
