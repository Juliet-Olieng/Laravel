@extends('layouts.layout')

@section('content')
        <div class="main">
            <div class="tittle m-b-mb">
                <h1>Welcome to pizza restaurant</h1>
                <h3> Pizza List</h3>
                <p>{{$name}}</p>

            </div>
            @foreach($pizzas as $pizza)
            <div>
                {{$pizza-> name}} -{{$pizza->type}} - {{$pizza->base}}
            </div>
            @endforeach
            <div class="img">
                 <img src="/images/pizza.jpg" alt=""> 
                 <img src="/images/pizza2.jpg" alt="">  
                </div>
        </div>
        @endsection
