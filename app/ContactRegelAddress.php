<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRegelAddress extends Model
{
    protected $fillable = [
		'contact_id',
		'address_id'
	];
}
