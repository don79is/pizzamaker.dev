@extends('main')

@section('title', trans('Padas'))



@section('content')

    @if(isset($name))
        <div>Padas sukurtas sėkmingai: {{$name}}</div>
    @endif





    {!! Form::open(['url' => route('create.base')]) !!}

    {{Form::label('base', 'Padas')}}
    {{Form::text('base')}}
    {{Form::submit('Prideti pada!')}}





    {!! Form::close() !!}

@endsection