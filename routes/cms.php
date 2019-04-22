<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'Cms\HomeController@index')->name('cms.home');

    Route::group(['prefix' => 'company-information'], function() {
        Route::get('/', 'Cms\CompanyInformationController@index')->name('cms.company-information');
        Route::post('store', 'Cms\CompanyInformationController@store')->name('cms.company-information.store');
    });

    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'Cms\UserController@index')->name('cms.users');
        Route::get('create', 'Cms\UserController@create')->name('cms.users.create');
        Route::post('store', 'Cms\UserController@show')->name('cms.users.store');
        Route::get('delete/{id}', 'Cms\UserController@destroy')->name('cms.users.delete');
    });

    Route::group(['prefix' => 'news'], function() {
        Route::get('/', 'Cms\NewsController@index')->name('cms.news');
        Route::get('create', 'Cms\NewsController@create')->name('cms.news.create');
        Route::post('store', 'Cms\NewsController@store')->name('cms.news.store');
        Route::get('delete/{id}', 'Cms\NewsController@destroy')->name('cms.news.delete');
        Route::get('update/{id?}', 'Cms\NewsController@show')->name('cms.news.update');
    });
});