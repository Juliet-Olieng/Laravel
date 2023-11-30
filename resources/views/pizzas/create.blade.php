@extends('layouts.layout')

@section('content')
        <div class="main">
            <div class="tittle m-b-mb">
                <h1>Welcome to pizza restaurant</h1>
                <h3>Add a new pizza</h3>

            </div>
            
        </div>
        <div class="wrapper create-pizza"></div>
        <form action="/pizza" method="POST">
            @csrf
            <label for="name"> Your name:</label>
            <input type="text" id="name" name="name">
            <label for="type"> choose pizza type:</label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="Hawaiian">Hawaiian</option>
                <option value="Veg supreme"> Veg Supreme</option>
                <option value="volcano">volcano</option>

            </select>
            <label for="base">choose base type:</label>
            <select name="base" id="base">
                <option value="cheest crust">cheese crust</option>
                <option value="garlic crust">garlic crust</option>
                <option value="thin $ crispy">thin $ cripsy</option>
                <option value="thick">Thick</option>

            </select>
            <fieldset>
                <label>Extra toppings:</label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
                <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
            </fieldset>
            <input type="submit" value="Order Pizza">
        </form>
        @endsection
