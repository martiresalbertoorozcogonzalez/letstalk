<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/chat', 'HomeController@index')->name('chat');
Route::get('/profile', 'ProfileController@edit');
Route::post('/profile', 'ProfileController@update');

Route::get('/api/conversations/', 'ConversationController@index');
Route::get('/api/messages/', 'MessageController@index');
Route::post('/api/messages', 'MessageController@store');
