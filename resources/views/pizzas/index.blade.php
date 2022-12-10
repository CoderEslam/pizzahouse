@extends('layouts.layout')

@section('content')
    <div style="height: 100vh;">
        <div class="title">
            <h1>
                Pizza House <br/>
                The North's Best
            </h1>
            @for($i = 0;$i < count($pizzas);$i++)
                <div>
                    <img src="img/pizza.jpg" style="height: 100px ; width: 100px">
                    <p> <h4><a href="pizzas/show/{{$pizzas[$i]['id']}}}">{{$pizzas[$i]['name']}}</a></h4> </p>
                </div>
            @endfor
        </div>
    </div>
@endsection

