@extends('layouts.layout')

@section('welcome')
        <div class="home">
            <img src="/images/logo.jpg" alt="">
            <h1>Welcome to the greatest pizza center</h1>
            <p>{{session('mssg')}}</p>
            <a href="pizza/create"> Order a pizza</a>
        </div>
@endsection