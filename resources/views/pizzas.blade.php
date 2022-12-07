@extends('layouts.layout')

@section('content')
    <div style="background-color: #a7c7ff">
        <div style="color: darkblue ;text-align: center">
            <h1>
                Pizza House <br/>
                The North's Best
            </h1>
            {{--        <p>--}}
            {{--        {{$type}} - {{$base}} - {{$price}}--}}
            {{--        </p>--}}
            @for($i = 0;$i < count($pizzas);$i++)
                <p> {{$pizzas[$i]['type']}} - {{$pizzas[$i]['base']}} - {{$pizzas[$i]['price']}}</p>
            @endfor

            @foreach($pizzas as $pizza)
                <div style="color: chartreuse">
                    {{$loop->index }}  {{$pizza['type']}} - {{$pizza['base']}} - {{$pizza['price']}}
                    @if($loop->first)
                        <span>- first in the loop</span>
                    @endif
                    @if($loop->last)
                        <span>- last in the loop</span>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
@endsection

@section('forloop')
    <div style="background-color: #fff1d8">
        <div style="color: darkblue ;text-align: center">

            <h1>for each Loop</h1>
            <ul>
                @php
                    $articles = ['Article 1','Article 2','Article 3'];
                @endphp
                @foreach ($articles as $article)
                    <li>{{ $article }}</li>
                @endforeach
                @foreach ($articles as $article)
                    <li>{{ $article }}</li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection
