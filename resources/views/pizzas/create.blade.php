@extends('layouts.layout')

@section('content')
    <div style="height: 100vh;">
        <div class="title">
            <div class="create-pizza">
                <h1>Create a new Pizza</h1>
                <form action="/pizzas" method="post">
                    <label for="name"> your name</label>
                    <input type="text" id="name" name="name">
                    <br>
                    <label for="type">type</label>
                    <select type="type" id="type">
                        <option value="margarite">Margarita</option>
                        <option value="hawaiian">Hawaiian</option>
                        <option value="veg superme">Veg Superme</option>
                        <option value="volcano">Volcano</option>
                    </select>
                    <br>
                    <label for="base">Choose base type</label>
                    <select type="base" id="base">
                        <option value="cheesy crust">Cheesy Crust</option>
                        <option value="garlic crust">Garlic Crust</option>
                        <option value="thin & crispy">Thin & Crispy</option>
                        <option value="thick">Thick</option>
                    </select>
                    <br>
                    <input type="submit" value="Order Pizza">
                </form>
            </div>
        </div>
    </div>
@endsection

