<?php

namespace App\Http\Controllers;








use App\Address;
use App\Contact;
use App\ContactRegelAddress;
use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
	{
		return view('index.index');
	}
}
