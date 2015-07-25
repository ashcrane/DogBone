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
 * Cute Pup Route
 * */

Route::get('home', 'HomeController@pup');

/*
 * Search Route
 * */

Route::get('search', 'SearchController@search');


/*
 * Authentication
 * */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
