<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'Cms\HomeController@index')->name('cms.home');
});