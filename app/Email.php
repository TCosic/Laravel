<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
	protected $fillable = [
		'email'
	];

	public function email()
	{
		return $this->belongsTo('App\Contact');
	}
}
