@extends('main')

@section('title', trans('Keisti  pica'))

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
    {{Form::text('pizza',$pizza['pizzaName'])}}
    <br>

    {{Form::label('base', 'Padas')}}'
    <br>
    {{Form::select('base', $base,$pizza['pizza_base_id'] )}}<br>

    {{Form::label('cheese', 'Suris')}}
    <br>
    {{Form::select('cheese', $cheese,$pizza['pizza_cheese_id'])}}
    <br>
    {{Form::label('ingredients', 'Priedai')}}
    @foreach($ingredients as $key => $ingr)<br>

    {{Form::checkbox('ingredients[]',$key,isset($ingr))}}
{{$ingr}}

    @endforeach

    <br>

    {{Form::submit('Pasigaminti pizza!')}}<br>



    {!! Form::close() !!}

@endsection