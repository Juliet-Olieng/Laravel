@extends('layouts.layout')

@section('content')
        <div class="main">
            <div class="tittle m-b-mb">
                <h1>Welcome to pizza restaurant</h1>

            </div>
            <div>
                <h1>Order for {{$pizza->name}}</h1>
                <p >Type -{{$pizza->type}}</p>
                <p>Base -{{$pizza->base}}</p>
                <p>Extra toppings:</p>
                <ul>
                    @foreach($pizza-> toppings as $topping)
                    <li>{{$topping}}</li>
                    @endforeach
                </ul>
            </div>
            <a href="/pizza/show">List of Pizza</a>
        </div>

        @endsection
