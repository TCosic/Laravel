@extends('master')

@section('title', 'Contact')

@section('content')

    <h1>Contacten</h1>
    @foreach($contacts as $contact)
        <div class="well">
            <a href="{{ route('contact.show', $contact->id) }}">
                {{ $contact->voornaam }}
                {{ $contact->achternaam }}
            </a>
            {!! Form::open(['route' => ['contact.destroy', $contact->id], 'method' => 'delete']) !!}
            {!! Form::submit('Verwijder') !!}
            {!! Form::close() !!}
            <a href="{{ route('contact.edit', $contact->id) }}">Wijzig</a>
        </div>
    @endforeach

@stop