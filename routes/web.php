<?php



Route::get('/','Index\IndexController@index')->name('base');

Route::get('/about','Index\IndexController@about')->name('about');


Route::get('/news','Index\IndexController@news')->name('news');

Route::get('/more/{id}','Index\IndexController@more')->name('more');



Route::get('/contact','Index\IndexController@contactForm')->name('contact');

Route::get('/price','Index\IndexController@price')->name('price');



