<?php

/*
  |--------------------------------------------------------------------------
  | Service - Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for this service.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('login', '\Framework\Http\Controllers\Auth\LoginController@showLoginForm')->name('get-login');
Route::post('login', '\Framework\Http\Controllers\Auth\LoginController@login')->name('post-login');
Route::post('logout', '\Framework\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'locale']], function() {

    Route::get('/', 'DashboardController@index')->name('dashboard');
});
