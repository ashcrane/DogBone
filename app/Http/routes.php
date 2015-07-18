<?php



/*
 * Landing Page Route
 * */
Route::get('/', 'PagesController@landing');


/*
 * Home Route
 * */

Route::get('home', 'HomeController@index');

/*
 * Authentication
 * */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
