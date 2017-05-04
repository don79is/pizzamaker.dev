@extends('main')

@section('title', trans('Visos picos'))

@section('content')

    @foreach( $all_pizzas as $pizza)
        {{$pizza['pizzaName']}}<br>
        {{$pizza['calories']}}
        {{$pizza['pizza_base']['name']}}
        {{$pizza['pizza_cheese']['name']}}
        @foreach($pizza['ingredients_connection'] as $key => $item)
            {{$item['ingredients']['ingredients']}}<br>

            @endforeach
@endforeach
@endsection