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

Route::get('/','Index\IndexController@index')->name('base');
Route::get('/news','Index\IndexController@news')->name('news');
Route::get('/contact','Index\IndexController@contactForm')->name('contact');
