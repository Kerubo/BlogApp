<?php

class Profile extends Eloquent
{
    protected $fillable = ['firstname', 'lastname'];

    public function user()
    {
        return $this->belongsTo('User');
    }
}
