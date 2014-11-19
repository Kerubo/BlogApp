<?php

class Profile extends Eloquent
{
    protected $fillable = ['firstname', 'lastname', 'email'];

    public function user()
    {
        return $this->belongsTo('User');
    }
}
