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
	return View::make('pages.index');
});
Route::get('/about', function()
{
	return View::make('pages.about');
});
Route::get('/contact', function()
{
	return View::make('pages.contact');
});

Route::get('/team', function()
{
	return View::make('pages.team');
});
Route::get('/product', function()
{
	return View::make('pages.product');
});
Route::get('/home', function()
{
	return View::make('ebotics.home');
});
Route::get('/serve', function()
{
	return View::make('ebotics.about');
});

Route::get('/quizy', function()
{
	return View::make('ebotics.quizy');
});

Route::get('/advertisments', function()
{
	return View::make('ebotics.Advertisments');
});
Route::get('/adverts', function()
{
	return View::make('ebotics.adverts');
});
Route::get('/teams', function()
{
	return View::make('ebotics.team');
});
Route::get('/products', function()
{
	return View::make('ebotics.products');
});
Route::get('/contacts', function()
{
	return View::make('ebotics.contact');
});

Route::get('/index', function()
{
	return View::make('ebotics.index');
});
Route::get('/quiz', function()
{
	return View::make('ebotics.quiz');
});

Route::get('/memory', function()
{
	return View::make('ebotics.memory');
});
Route::get('/creative', function()
{
	return View::make('ebotics.creative');
});


// 
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