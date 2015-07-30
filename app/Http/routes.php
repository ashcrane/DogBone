<?php


use App\cutePup;
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

/*
 * Facebook Authentication
 * */

Route::get('facebook/authorize', function(){
    return $this->app['adamwathan.oauth']->authorize('facebook');
});

Route::get('facebook/login', function(){
    $this->app['adamwathan.oauth']->login('facebook', function($user, $userDetails){
        $user->name = $userDetails->full_name;
        $user->email = $userDetails->email;
        $user->save();
    });

    $pups = cutePup::all()->random(1);
    return view('home', compact('pups'));

});

//Sending Mail
