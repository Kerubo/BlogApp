<?php
class IndexController extends BaseController {
 
public function showIndex()
{
// generates response from index.blade.php
return View::make('index');
}
}
 
//file: app/routes.php
//registering route to controller actions
 
Route::get('index','IndexController@showIndex');
 
//In general
Route::get('route.name','SomeController@someAction');
Route::post('route.name','SomeController@someAction');