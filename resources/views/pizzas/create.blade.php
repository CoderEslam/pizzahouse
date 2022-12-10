@extends('layouts.layout')

@section('content')
    <div style="height: 100vh;">
        <div class="title">
            <div class="create-pizza">
                <h1>Create a new Pizza</h1>
                <form action="/pizzas" method="post">
                    @csrf {{-- cross site request forgery--}}
                    <label for="name"> your name</label>
                    <input type="text" id="name" name="name">
                    <br>
                    <label for="type">type:</label>
                    <select id="type" name="type">
                        <option value="margarite">Margarita</option>
                        <option value="hawaiian">Hawaiian</option>
                        <option value="veg superme">Veg Superme</option>
                        <option value="volcano">Volcano</option>
                    </select>
                    <br>
                    <label for="base">Choose base type:</label>
                    <select id="base" name="base">
                        <option value="cheesy crust">Cheesy Crust</option>
                        <option value="garlic crust">Garlic Crust</option>
                        <option value="thin & crispy">Thin & Crispy</option>
                        <option value="thick">Thick</option>
                    </select>
                    <br>
                    <fieldset>
                        <label>Extra toppings:</label>
                        {{-- toppings[] -> this mean I want catch an array not only text --}}
                        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
                        <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
                        <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
                        <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
                    </fieldset>
                    <input type="submit" value="Order Pizza">
                </form>
            </div>
        </div>
    </div>
@endsection

