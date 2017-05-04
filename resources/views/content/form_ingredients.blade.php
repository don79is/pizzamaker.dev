@extends('main')

@section('title', trans('Ingidientai'))



@section('content')

    @if(isset($name))
        <div>Pagardas sukurtas sėkmingai: {{$name}}</div>
    @endif




    {!! Form::open(['url' => route('create.ingredient')]) !!}

    {{Form::label('ingredients', 'Ingredient')}}
    {{Form::text('ingredient')}}
    {{Form::submit('Prideti prieda!')}}





    {!! Form::close() !!}

@endsection