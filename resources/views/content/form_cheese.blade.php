@extends('main')

@section('title', trans('Suris'))



@section('content')

    @if(isset($name))
        <div>Suris sukurtas sėkmingai: {{$name}}</div>
    @endif





    {!! Form::open(['url' => route('create.cheese')]) !!}

    {{Form::label('cheese', 'Suris')}}
    {{Form::text('cheese')}}
    {{Form::submit('Prideti suri!')}}





    {!! Form::close() !!}

@endsection