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

Route::get('/', 'HomeController@index')->name('home');
Route::get('services', 'ServicesController@index')->name('services');
Route::get('about', 'AboutController@index')->name('about');

Route::group(['prefix' => 'news'], function () {
    Route::get('/', 'NewsController@index')->name('news');
    Route::get('{slug}', 'NewsController@show')->name('news.show');
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', 'ContactController@index')->name('contact');
    Route::post('send', 'ContactController@store')->name('contact.send');
});

Route::group(['prefix' => 'cms'], static function () {
    Auth::routes();

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', 'Cms\HomeController@index')->name('cms.home');

        Route::group(['prefix' => 'company-information'], function () {
            Route::get('/', 'Cms\CompanyInformationController@index')->name('cms.company-information');
            Route::post('store', 'Cms\CompanyInformationController@store')->name('cms.company-information.store');
        });

        Route::group(['prefix' => 'social'], function () {
            Route::get('/', 'Cms\SocialController@index')->name('cms.social');
            Route::post('store', 'Cms\SocialController@store')->name('cms.social.store');
        });

        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'Cms\UserController@index')->name('cms.users');
            Route::get('create', 'Cms\UserController@create')->name('cms.users.create');
            Route::post('store', 'Cms\UserController@store')->name('cms.users.store');
            Route::get('delete/{id}', 'Cms\UserController@destroy')->name('cms.users.delete');
        });

        Route::group(['prefix' => 'news'], function () {
            Route::get('/', 'Cms\NewsController@index')->name('cms.news');
            Route::get('create', 'Cms\NewsController@show')->name('cms.news.create');
            Route::post('store', 'Cms\NewsController@store')->name('cms.news.store');
            Route::get('delete/{id}', 'Cms\NewsController@destroy')->name('cms.news.delete');
            Route::get('update/{id?}', 'Cms\NewsController@show')->name('cms.news.update');
        });
    });
});
