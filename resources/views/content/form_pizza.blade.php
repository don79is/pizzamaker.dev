@extends('main')



@section('title', trans('Pasigamink pica'))



@section('content')

    @if(isset($name))
        <div>Pica sukurta sėkmingai: {{$name}}</div>
    @endif



    {{--<form method="POST" action="{{route('create.cities')}}">--}}
    {{--City:<br>--}}
    {{--<input type="text" name="city" placeholder="write">--}}
    {{--<br>--}}
    {{--<input type="submit" value="Submit">--}}

    {{--{{csrf_field()}}--}}

    {{--</form>--}}


    {!! Form::open(['url' => route('create.pizza')]) !!}

    {{Form::label('name', 'Pizza name')}}
    {{Form::text('pizza')}}
    <br>
    {{Form::select('base', $base)}}<br>
    {{Form::select('cheese', $cheese)}}<br>
    {{Form::select('ingredients', $ingredients)}}<br>








    {{Form::submit('Pasigaminti pizza!')}}<br>



    {!! Form::close() !!}

@endsection