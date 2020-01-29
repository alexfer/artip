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

// Injternal routes
Route::get('/', 'IndexController@index')->name('index');
Route::get('/contacts.html', 'ContentController@contact')->name('contacts');
Route::get('/{slug}.html', 'ContentController@single')->name('single.by.slug');
Route::get('/{locale}/{slug}.html', 'ContentController@single')->name('single-translation.by.slug');
Route::get('/news/{id}-{slug}.html', 'ContentController@news')->where('id', '[0-9]+')->name('news.by.slug');
Route::get('/download/{id}', 'MediaController@download')->where('id', '[0-9]+')->name('download');
Route::group(['prefix' => 'web', 'middleware' => 'throttle:3,10'], function () {
    Route::post('/submission.html', 'SubmissionController@send')->name('submission');
});

// External Url's
foreach (config('external-urls') as $name => $url) {
    Route::get(sprintf('/%s', $name), function() use ($url) {
        return redirect()->away($url);
    })->name(sprintf('redirect.to.%s', $name));
}


