@extends('master')

@section('title', "Contact")

@section('content')

    <h1>Contact Formulier</h1>

    {!! Form::open(['route' => 'contact.store']) !!}
    <div class="form-group">
        {!! Form::label('voornaam', 'Voornaam:') !!}
        {!! Form::text('voornaam', null, ['class' => 'form-control']) !!}
    </div>
    @include('errors.validateError', ['errorName' => 'voornaam'])

    <div class="form-group">
        {!! Form::label('achternaam', 'Achternaam:') !!}
        {!! Form::text('achternaam', null, ['class' => 'form-control']) !!}
    </div>
    @include('errors.validateError', ['errorName' => 'achternaam'])

    <div class="form-group">
        {!! Form::label('date', 'Date:') !!}
        {!! Form::input('date', 'geboortedatum', null, ['type' => 'date', 'class' => 'form-control']) !!}
    </div>
    @include('errors.validateError', ['errorName' => 'geboortedatum'])

    <div class="form-group">
        {!! Form::label('opnemen_kalender', 'Opnemen in kalender:') !!}
        {!! Form::checkbox('opnemen_kalender', '1') !!}
    </div>

    <div class="form-group">
        {!! Form::label('opmerking', 'Opmerking:') !!}
        {!! Form::textarea('opmerking', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('relation', 'Relatie:') !!}
        {!! Form::select('relation_id', $relationArray, null, ['class' => 'form-control']) !!}
    </div>
    @include('errors.validateError', ['errorName' => 'relation_id'])

    <div class="form-group">
        {!! Form::submit('Verstuur', array('class' => 'btn btn-primary form-control')) !!}
    </div>
    {!! Form::close() !!}
@stop