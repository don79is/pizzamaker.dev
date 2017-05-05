@extends('main')

@section('title', trans('Visos picos'))

@section('content')

    <table style="width:100%">
        <tr>
            <th class="col-md-2">Pica</th>
            <th class="col-md-2">Ingredients</th>
            <th class="col-md-2">Colories</th>
        </tr>
<tr>
        @foreach( $all_pizzas as $pizza)
        <td>{{$pizza['pizzaName']}}</td>

            {{$pizza['calories']}}
            {{$pizza['pizza_base']['name']}}
            {{$pizza['pizza_cheese']['name']}}
            @foreach($pizza['ingredients_connection'] as $key => $item)
                {{$item['ingredients']['ingredients']}}

    @endforeach
    @endforeach
</tr>
    </table>
@endsection

