<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizza','App\Http\Controllers\PizzaController@index');
Route::get('/pizza/create','App\Http\Controllers\PizzaController@create');
Route::post('/pizza','App\Http\Controllers\PizzaController@store');
Route::get('/pizza/{id}','App\Http\Controllers\PizzaController@show');


