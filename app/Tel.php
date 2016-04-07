<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tel extends Model
{
	protected $fillable = [
		'phonenumber'
	];

	public function tel()
	{
		return $this->belongsTo('App\Contact');
	}

}
