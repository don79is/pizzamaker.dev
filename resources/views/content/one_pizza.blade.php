@extends('main')

@section('title', trans('Viena pica'))

@section('content')

    <table style="width:100%">
        <tr>
            <th class="col-md-2">Pica</th>
            <th class="col-md-2">Ingredients</th>
            <th class="col-md-2">Colories</th>
            <th class="col-md-2"></th>
            <th class="col-md-2">Delete</th>
        </tr>
        <tr>

            <td>{{$pizza['pizzaName']}}</td>
            <td> {{$pizza['pizza_base']['name']}},
                {{$pizza['pizza_cheese']['name']}}
                @foreach($pizza['ingredients_connection'] as $key => $item)
                    {{$item['ingredients']['ingredients']}}
                @endforeach
            </td>
            <td> {{$pizza['calories']}}</td>
            <td><input type="button"  value="Delete" /></td>
        </tr>




    </table>
    <input type="button" onclick="location.href='{{$pizza['id']}}/edit'" value="Gryzti atgal" />
@endsection