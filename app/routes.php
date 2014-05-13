<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
  $title = 'Startseite';
	return View::make('home.index')
    ->with('title', $title);
});

Route::controller('users', 'UserController');


Route::get('login', function()
{
  $title = 'Login';
  return View::make('users.login')
    ->with('title', $title);
});

Route::post('login', array(
  'as' => 'login', 
  'uses' => 'UserController@postLogin'
));

Route::get('register', array(
  'as' => 'register', 
  'uses' => 'UserController@getRegister'
));

Route::post('register', array(
  'as' => 'register', 
  'uses' => 'UserController@postRegister'
));

Route::get('profile', array(
  'as' => 'profile', 
  'uses' => 'UserController@getProfile'
));

Route::get('logout', array(
  'as' => 'logout', 
  'uses' => 'UserController@getLogout'
));


Route::post('search', array(
  'as' => 'search', 
  'uses' => 'SearchController@postSearch'  
));
