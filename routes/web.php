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

Route::group(['prefix' => 'news'], function() {
    Route::get('/', 'NewsController@index')->name('news');
    Route::get('{slug}', 'NewsController@show')->name('news.show');
});

Route::group(['prefix' => 'contact'], function() {
    Route::get('/', 'ContactController@index')->name('contact');
    Route::post('send', 'ContactController@store')->name('contact.send');
});
