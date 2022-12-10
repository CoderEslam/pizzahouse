@extends('layouts.layout')

@section('content')
    <div style="height: 100vh;">
        <div class="title">

            @for($i = 0;$i < count($pizzas);$i++)
                <div>
                    <img src="img/pizza.jpg" style="height: 100px ; width: 100px">
                    <p><a style="font-size:18px" href="show/{{$pizzas[$i]['id']}}}">{{$pizzas[$i]['name']}}</a>
                    </p>
                </div>
            @endfor

        </div>
    </div>
@endsection

