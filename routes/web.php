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

Route::get('/')->name('home')->uses('HomeController@index');
Route::get('/terms')->name('terms')->uses('HomeController@terms');

Auth::routes();

Route::get('/admin')->name('admin.home')->uses('Admin\HomeController@index');
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
