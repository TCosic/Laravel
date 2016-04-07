<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
		'huisnummer',
		'toevoeging',
		'straatnaam',
		'postcode',
		'plaats'
	];

	public function contact()
	{
		return $this->belongsToMany('App\Contact', 'contact_regel_addresses', 'address_id', 'contact_id');
	}
}
