<?php

Route::get('/home', function()
{
return View::make('home');
});
Route::get('/about', function()
{
return View::make('about');
});

Route::post('contact', function()
{
$data = Input::all();
$rules = array(
'subject' => 'required',
'message' => 'required'
);