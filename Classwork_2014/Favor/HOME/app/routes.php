<?php
Route::get('/', function()
{
	return View::make('pages.home');
});
Route::get('about', function()
{
	return View::make('pages.about');
});
Route::get('event', function()
{
	return View::make('pages.event');
});
Route::get('contact', function()
{
	return View::make('pages.contact');
});
