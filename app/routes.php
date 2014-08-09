<?php

$prefix = Config::get('hello.prefix');

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);

Route::resource('users', 'UsersController');
Route::resource('posts', 'PostssController');
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store']]);

Route::group(['prefix' => $prefix, 'before' => 'auth', 'namespace' => 'Admin'], function () use ($prefix)
{
	Route::get('/', ['as' => "{$prefix}.home", 'uses' => 'HomeController@index']);
});