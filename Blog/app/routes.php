<?php

//file: app/routes.php
 
Route::model('post','Post');
 
Route::get('post/{post}',function(Post $post)
{
echo $post->title;
 
});