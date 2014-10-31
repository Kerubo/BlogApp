<?php
// Route for sign up page
Route::get('signup', 'AuthController@signUpPage');
Route::post('signup', 'AuthController@signup');

 //Route::resource('/user', 'UserController');
//Route::controller('/home', 'HomeController');