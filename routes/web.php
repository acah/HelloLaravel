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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', 'App\Http\Controllers\AuthController@register');

Route::post('/simpanuser', 'App\Http\Controllers\AuthController@simpanuser');

Route::get('/', 'App\Http\Controllers\AuthController@login');

Route::post('/ceklogin', 'App\Http\Controllers\AuthController@ceklogin');
