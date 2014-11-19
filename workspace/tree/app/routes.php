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
//the website routes
Route::get('/', function()
{
	return View::make('ebotics.home');
});
Route::get('/about', function()
{
	return View::make('ebotics.about');
});

Route::get('/advertisments', function()
{
	return View::make('ebotics.Advertisments');
});
Route::get('/adverts', function()
{
	return View::make('ebotics.adverts');
});
Route::get('/team', function()
{
	return View::make('ebotics.team');
});
Route::get('/products', function()
{
	return View::make('ebotics.products');
});
Route::get('/contact', function()
{
	return View::make('ebotics.contact');
});

Route::get('/index', function()
{
	return View::make('ebotics.index');
});
// Route for sign up page
Route::get('signup', 'AuthController@signUpPage');
Route::post('signup', 'AuthController@signup');

// Route for login page
Route::get('login', 'AuthController@loginPage');
Route::post('login', 'AuthController@login');

Route::get('logout', 'AuthController@logout');
//Profile routes
Route::resource('profile', 'ProfilesController');

// Blog Routes
Route::get('posts/search', ['as' => 'posts.search', 'uses' => 'PostController@search']);
Route::resource('posts', 'PostController');
// Todos Routes
Route::get('todos/search', 'TodosController@search');
Route::resource('todos', 'TodosController');

 
Route::resource('/user', 'UserController');
Route::controller('/home', 'HomeController');