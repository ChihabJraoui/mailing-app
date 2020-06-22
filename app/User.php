<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


	public function books()
	{
		return $this->hasMany('App\Book');
	}

	public function folders()
	{
		return $this->hasMany('App\Folder');
	}



	public function getAvatar()
	{
		if(empty($this->attributes['avatar']))
		{
			$photo = 'default.png';
		}
		else
		{
			$photo = $this->attributes['avatar'];
		}

		return asset('storage/avatars/' . $photo);
	}

	public function getFullname()
	{
		return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
	}
}
