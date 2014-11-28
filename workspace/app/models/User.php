<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
    protected $fillable = ['username', 'password'];


    public function profile()
    {
        return $this->hasOne('Profile');
    }

    public function gravatar()
    {
        return "http://www.gravatar.com/avatar/".md5(strtolower(trim($this->email)));
    }
	public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}
