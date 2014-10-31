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
{return View::make('master');
});
Route::resource('/user', 'UserController');
Route::controller('/', 'HomeController');
Route::get('login', function()
{
	return View::make('auth.login');
});

// Authentication Routes
Route::get('login', 'AuthController@loginPage');
Route::post('login', 'AuthController@login');
Route::get('signup', 'AuthController@signupPage');
Route::post('signup', 'AuthController@signup');
Route::get('logout', 'AuthController@logout');

// Blog Routes
Route::get('contents/search', ['as' => 'contents.search', 'uses' => 'ContentController@search']);
Route::resource('contents', 'ContentController');
