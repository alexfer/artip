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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/contacts.html', 'ContentController@contact')->name('contacts');
Route::get('/{slug}.html', 'ContentController@single')->name('single.by.slug');
Route::get('/news/{id}-{slug}.html', 'ContentController@news')->name('news.by.slug');

// External Url's
foreach (config('external-urls') as $name => $url) {
    Route::get(sprintf('/%s', $name), function() use ($url) {
        return redirect()->away($url);
    })->name(sprintf('redirect.to.%s', $name));
}


