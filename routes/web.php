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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get-login', 'Auth\LoginController@get_login')->name('get-login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/get-register', 'Auth\LoginController@get_register')->name('get-register');
Route::get('/register', 'Auth\LoginController@register')->name('register');