@extends('master')

@section('title', "$contact->voornaam $contact->achternaam")

@section('content')

    <h1>{{ $contact->voornaam }} {{ $contact->achternaam }}</h1>

    <div class="well">
        {{--address--}}
        {{ $contact->address->first()->straatnaam }}
        {{ $contact->address->first()->huisnummer }}
        {{ $contact->address->first()->postcode }}
        {{ $contact->address->first()->plaats }}
    </div>

    <div class="well">
        {{ $contact->tel->first()->phonenumber }}
    </div>

    <div class="well">
        {{ $contact->banknumber->first()->number }}
    </div>

    <div class="well">
        {{ $contact->email->first()->email }}
    </div>

@stop