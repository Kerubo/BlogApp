<?php
/**
* Post Model
*/
class Content extends Eloquent
{
  protected $fillable = ['title', 'text', 'slug'];

 
  public function author()
  {
    return $this->belongsTo('User', 'user_id');
  }

  public static function slugify($string)
  {
    return str_replace(' ', '-', strtolower($string));
  }
}