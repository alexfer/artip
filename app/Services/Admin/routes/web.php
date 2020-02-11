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
Route::post('login', '\Framework\Http\Controllers\Auth\LoginController@login')->middleware('throttle:3,10');
Route::post('logout', '\Framework\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'locale']], function() {

    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/storage-link', 'DashboardController@storageLink')->name('storage-link');

    // Categories section
    Route::get('/categories', 'CategoryController@collection')->name('category.collection');
    Route::post('/category', 'CategoryController@create')->name('category.create');
    Route::get('/category/create', 'CategoryController@form')->name('category.form');
    Route::get('/category/{id}', 'CategoryController@edit')->name('category.edit');
    Route::put('/category/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/category/{id}', 'CategoryController@delete')->name('category.delete');
    Route::patch('/categories/rebuild-tree', 'CategoryController@rebuildTree')->name('categories.rebuild-tree');

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
    Route::post('/media', 'MediaController@upload')->name('media.upload');
    Route::get('/media-files', 'MediaController@index')->name('media.content');

    // Submission section
    Route::get('/submission', 'SubmissionController@collection')->name('submission.collection');
    Route::get('/submission/{id}', 'SubmissionController@form')->name('submission.form');
    Route::post('/submission', 'SubmissionController@answer')->name('submission.answer');
    
    //Activity log section
    Route::post('/activity-log', 'ActivityLogController@collection')->name('activity.log');
});
