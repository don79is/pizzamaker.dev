@extends('main')

@section('title', trans('Ingidientai'))



@section('content')

    @if(isset($name))
        <div>Pagardas sukurtas sėkmingai: {{$name}}</div>
    @endif



    {{--<form method="POST" action="{{route('create.cities')}}">--}}
    {{--City:<br>--}}
    {{--<input type="text" name="city" placeholder="write">--}}
    {{--<br>--}}
    {{--<input type="submit" value="Submit">--}}

    {{--{{csrf_field()}}--}}

    {{--</form>--}}


    {!! Form::open(['url' => route('create.ingredient')]) !!}

    {{Form::label('ingredients', 'Ingredient')}}
    {{Form::text('ingredient')}}
    {{Form::submit('Prideti prieda!')}}





    {!! Form::close() !!}

@endsection