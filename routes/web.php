
<?php

Route::get('/', 'HomeController@index')->name('home');

//menampilkan database
Route::get('/create-new-article', 'ArticleController@create')->name('articles.create');

//memasukkan database
Route::post('/create-new-article', 'ArticleController@store');
