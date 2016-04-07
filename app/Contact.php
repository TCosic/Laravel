<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
		'voornaam',
		'achternaam',
		'geboortedatum',
		'opnemen_kalender',
		'opmerking',
		'relation_id'
	];

	public function address()
	{
		return $this->belongsToMany('App\Address', 'contact_regel_addresses', 'contact_id', 'address_id');
	}

	public function banknumber()
	{
		return $this->hasMany('App\Banknumber');
	}

	public function email()
	{
		return $this->hasMany('App\Email');
	}

	public function tel()
	{
		return $this->hasMany('App\Tel');
	}
}
