@extends('layouts.layout')

@section('content')
    <div style="height: 100vh;">
        <div class="title">
            <h1>order for {{$pizzas->name}}</h1>
            <h1>type for {{$pizzas->type}}</h1>
            <h1>price for {{$pizzas->price}}</h1>
            <h1>toppings</h1>
            <ul>
                @foreach($pizzas->toppings as $topping)
                    <li>{{$topping}}</li>
                @endforeach
            </ul>
        </div>

        <form action="/pizzas/{{$pizzas->id}}" method="post">
            @csrf
            @method('DELETE')
            <button>Complete order</button>
        </form>

        <a href="/pizzahouse/public/pizzas"> <- back to all pizzas</a>


    </div>
@endsection

