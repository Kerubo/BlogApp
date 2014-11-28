<?php
class IndexController extends BaseController {
 
public function showIndex()
{
// generates response from index.blade.php
return View::make('index');
}
}
 
/