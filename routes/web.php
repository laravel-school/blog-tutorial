<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');

