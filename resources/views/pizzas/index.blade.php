@extends('layouts.layout')

@section('content')
    <div style="height: 100vh;">
        <div class="title">
            <p>{{$name}} - {{$age}}</p>

            @for($i = 0;$i < count($pizzas);$i++)
                <p> {{$pizzas[$i]['type']}} - {{$pizzas[$i]['base']}} - {{$pizzas[$i]['price']}}</p>
            @endfor

            <img src="img/night.png" style="width: auto;height: 200px">
            <h1>
                Pizza House <br/>
                The North's Best
            </h1>
            <p>
                {{session('message')}} {{-- to resive data from redirect() method in PizzaController--}}
            </p>
            <a href="/pizzas/create">Order a pizza</a>
        </div>
    </div>
@endsection

