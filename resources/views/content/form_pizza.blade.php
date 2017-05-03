@extends('main')

@section('title', trans('Pasigamink pica'))

@section('content')

    @if(isset($pizzaName))
        <div>Pica sukurta sėkmingai: {{$pizzaName}}</div>
    @endif



    {{--<form method="POST" action="{{route('create.cities')}}">--}}
    {{--City:<br>--}}
    {{--<input type="text" name="city" placeholder="write">--}}
    {{--<br>--}}
    {{--<input type="submit" value="Submit">--}}

    {{--{{csrf_field()}}--}}

    {{--</form>--}}


    {!! Form::open(['url' => route('create.pizza')]) !!}

    {{Form::label('pizza', 'Telefonas')}}
    {{Form::text('pizza')}}
    <br>
    {{Form::select('base', $base)}}<br>

    {{Form::select('cheese', $cheese)}}<br>

    @foreach($ingredients as $key => $ingr)<br>
    {{Form::checkbox('ingredients[]',$key)}}
    {{$ingr}}
    @endforeach

    <br>

    {{Form::submit('Pasigaminti pizza!')}}<br>



    {!! Form::close() !!}

@endsection