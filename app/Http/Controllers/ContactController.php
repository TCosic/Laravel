<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use App\Relation;
use Validator;

class ContactController extends Controller
{
	private function validator(array $data)
	{
		return Validator::make($data, [
			'voornaam' => 'required|max:50|min:2',
			'achternaam' => 'required|max:60|min:2',
			'geboortedatum' => 'required|date',
			'relation_id' => 'required'
		]);
	}

	public function index()
	{
		$contacts = Contact::all();
		return view('contact.index', compact('contacts'));
	}

	public function show($id)
	{
		$contact = Contact::findOrFail($id);
		return view('contact.show', compact('contact'));
	}

	public function create()
	{
		$relations = Relation::all();

		$relationArray = [];
		foreach ($relations as $relation) {
			$relationArray[$relation->id] = $relation->type;
		}

		return view('contact.create', compact('relationArray'));
	}

	public function store(Request $request)
	{
		$input = $request->all();
		$validate = $this->validator($input);
		if ($validate->fails()) {
			$this->throwValidationException($request, $validate);
		} else {
			Contact::create($input);
		}
		return redirect(route('contact.index'));
	}

	public function edit($id)
	{
		$relations = Relation::all();

		$relationArray = [];
		foreach ($relations as $relation) {
			$relationArray[$relation->id] = $relation->type;
		}

		$contact = Contact::findOrFail($id);

		return view('contact.edit', compact('contact', 'relationArray'));
	}

	public function update(Request $request, $id)
	{
		$input = $request->all();

		$validate = $this->validator($input);
		if ($validate->fails()) {
			$this->throwValidationException($request, $validate);
		} else {
			Contact::findOrFail($id)->update($input);
		}
		return redirect(route('contact.index'));
	}

	public function destroy($id)
	{
		Contact::destroy($id);
		return redirect(route('contact.index'));
	}
}
