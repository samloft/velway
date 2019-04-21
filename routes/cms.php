<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'Cms\HomeController@index')->name('cms.home');

    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'Cms\UserController@index')->name('cms.users');
        Route::get('create', 'Cms\UserController@create')->name('cms.users.create');
        Route::post('store', 'Cms\UserController@store')->name('cms.users.store');
        Route::get('delete/{id}', 'Cms\UserController@destroy')->name('cms.users.delete');
    });
});