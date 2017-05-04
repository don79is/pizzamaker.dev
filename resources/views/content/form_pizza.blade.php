@extends('main')

@section('title', trans('Pasigamink pica'))

@section('content')

    @if(isset($data))
        @if((sizeof($data['ingredients'] )> 3 ))
            <div style="color: red">Pasirinkite iki 3 priedu</div>
        @endif
    @endif

    @if(isset($pizzaName))
        <div>Pica sukurta sėkmingai: {{$pizzaName}}</div>
    @endif

    {!! Form::open(['url' => route('create.pizza')]) !!}

    {{Form::label('pizza', 'Telefonas')}}
    <br>
    {{Form::text('pizza')}}
    <br>

    {{Form::label('base', 'Padas')}}
    <br>
    {{Form::select('base', $base)}}<br>

    {{Form::label('cheese', 'Suris')}}
    <br>
    {{Form::select('cheese', $cheese)}}
    <br>
    {{Form::label('ingredients', 'Priedai')}}
    @foreach($ingredients as $key => $ingr)<br>
    {{Form::checkbox('ingredients[]',$key)}}
    {{$ingr}}
    @endforeach

    <br>

    {{Form::submit('Pasigaminti pizza!')}}<br>



    {!! Form::close() !!}

@endsection