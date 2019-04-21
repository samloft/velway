<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'Cms\HomeController@index')->name('cms.home');

    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'Cms\UserController@index')->name('cms.users');
    });
});