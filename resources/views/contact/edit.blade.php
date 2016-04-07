@extends('master')

@section('title', 'Edit contact')

@section('content')
    <h1>Edit contact</h1>
    {!! Form::open(['route' => ['contact.update', $contact->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('voornaam', 'Voornaam:') !!}
        {!! Form::text('voornaam', $contact->voornaam, ['class' => 'form-control']) !!}
    </div>
    @include('errors.validateError', ['errorName' => 'voornaam'])

    <div class="form-group">
        {!! Form::label('achternaam', 'Achternaam:') !!}
        {!! Form::text('achternaam', $contact->achternaam, ['class' => 'form-control']) !!}
    </div>
    @include('errors.validateError', ['errorName' => 'achternaam'])

    <div class="form-group">
        {!! Form::label('date', 'Date:') !!}
        {!! Form::input('date', 'geboortedatum', $contact->geboortedatum, ['type' => 'date', 'class' => 'form-control']) !!}
    </div>
    @include('errors.validateError', ['errorName' => 'geboortedatum'])

    <div class="form-group">
        {!! Form::label('opnemen_kalender', 'Opnemen in kalender:') !!}
        {!! Form::checkbox('opnemen_kalender', '1', $contact->opnemen_kalender) !!}
    </div>

    <div class="form-group">
        {!! Form::label('opmerking', 'Opmerking:') !!}
        {!! Form::textarea('opmerking', $contact->opmerking, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('relation', 'Relatie:') !!}
        {!! Form::select('relation_id', $relationArray, $contact->relation_id, ['class' => 'form-control']) !!}
    </div>
    @include('errors.validateError', ['errorName' => 'relation_id'])

    <div class="form-group">
        {!! Form::submit('Verstuur', array('class' => 'btn btn-primary form-control')) !!}
    </div>

    {!! Form::close() !!}
@stop