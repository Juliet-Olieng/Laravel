<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizza;

class PizzaController extends Controller
{
 public function index(){
    $pizzas=pizza::all();
  
    $name=request("name");
    $pizzas=pizza::orderBy('name','desc')->get();
    return view('pizzas.index',
    ['pizzas'=>$pizzas, 'name'=>$name]); 
 }
 public function show($id) {
   $pizza=pizza::findOrFail($id);
    return view('pizzas.show',['pizza'=>$pizza]);
    
 }
 public function create() {
   return view('pizzas.create');
   
 }
 public function store(){
//   error_log( request ('name'));
//   error_log( request ('type'));
//   error_log( request ('base'));
$pizza =new pizza();
$pizza->name=request('name');
$pizza->type=request('type');
$pizza->base=request('base');
$pizza->base=request('toppings');
// return request('toppings');
// $pizza->toppings=request('toppings');
// $pizza->save();
  return redirect('/')->with('mssg','Thank you for ordering');
  
 }
}
