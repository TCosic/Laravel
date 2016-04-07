<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banknumber extends Model
{
	protected $fillable = [
		'number'
	];

	public function banknumber()
	{
		return $this->belongsTo('App\Contact');
	}
}
