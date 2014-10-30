<?php

//the pages
Route::get('/', function()
{
	return View::make('pages.home');
});
Route::get('/about', function()
{
	return View::make('pages.about');
});
Route::get('/products', function()
{
	return View::make('pages.products');
});

Route::get('/contact', function()
{
	return View::make('pages.contact');
});
// authentication routes
// Route for sign up page
Route::get('signup', 'AuthController@signUpPage');
Route::post('signup', 'AuthController@signup');

// Route for login page
Route::get('login', 'AuthController@loginPage');
Route::post('login', 'AuthController@login');

Route::get('logout', 'AuthController@logout');

Route::resource('profile', 'ProfilesController');
// Course Routes
Route::get('posts/search', ['as' => 'posts.search', 'uses' => 'PostController@search']);
Route::resource('posts', 'PostController');
