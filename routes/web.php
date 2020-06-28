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

//Route::get('/', 'UserController@home')->name('home');
Route::get('/users', 'UserController@showUsers')->name('showusers');
Route::get('/signup', 'UserController@CreateUser');
Route::post('/signup', 'UserController@saveUser')->name('createuser');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@signin')->name('signin');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
