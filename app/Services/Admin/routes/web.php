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

Route::get('login', '\Framework\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', '\Framework\Http\Controllers\Auth\LoginController@login');
Route::post('logout', '\Framework\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'locale']], function() {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    // User section
    Route::get('/users', 'UserController@collection')->name('user.collection');
    Route::get('/user/{id}', 'UserController@get')->name('user.get')->where('id', '[0-9]+');
    Route::put('/user/{id}', 'UserController@update')->name('user.update')->where('id', '[0-9]+');
    Route::put('/user/{id}/password', 'UserController@password')->name('user.password')->where('id', '[0-9]+');
    Route::get('/user/create', 'UserController@form')->name('user.form');
    Route::post('/user', 'UserController@create')->name('user.create');

    // Content section
    Route::get('/content', 'ContentController@collection')->name('content.collection');
    Route::get('/content/create', 'ContentController@form')->name('content.form');
    Route::get('/content/{id}', 'ContentController@get')->name('content.get')->where('id', '[0-9]+');
    Route::post('/content', 'ContentController@create')->name('content.create');
    Route::put('/content/{id}', 'ContentController@update')->name('content.update')->where('id', '[0-9]+');
    Route::get('/content/{id}/delete', 'ContentController@delete')->name('content.delete')->where('id', '[0-9]+');
    Route::get('/content/{id}/restore', 'ContentController@restore')->name('content.restore')->where('id', '[0-9]+');
    Route::get('/content/{id}/publish', 'ContentController@publish')->name('content.publish')->where('id', '[0-9]+');
    Route::get('/content/{id}/unpublish', 'ContentController@unpublish')->name('content.unpublish')->where('id', '[0-9]+');
    
    // Media section    
    Route::get('/media', 'MediaController@collection')->name('media.collection');
});
