<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{

	/**
	 *
	 */

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function campaigns()
	{
		return $this->hasMany('App\Campaign');
	}
}
