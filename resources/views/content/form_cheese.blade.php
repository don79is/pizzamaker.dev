@extends('main')

@section('title', trans('Suris'))



@section('content')

    @if(isset($name))
        <div>Suris sukurtas sėkmingai: {{$name}}</div>
    @endif



    {{--<form method="POST" action="{{route('create.cities')}}">--}}
    {{--City:<br>--}}
    {{--<input type="text" name="city" placeholder="write">--}}
    {{--<br>--}}
    {{--<input type="submit" value="Submit">--}}

    {{--{{csrf_field()}}--}}

    {{--</form>--}}


    {!! Form::open(['url' => route('create.cheese')]) !!}

    {{Form::label('cheese', 'Suris')}}
    {{Form::text('cheese')}}
    {{Form::submit('Prideti suri!')}}





    {!! Form::close() !!}

@endsection