<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
	protected $fillable = [
		'type'
	];

	public function contacts()
	{
		return $this->belongsToMany('App\Contact');
	}

}
