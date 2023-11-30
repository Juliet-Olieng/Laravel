<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pizza extends Model
{
    // use HasFactory;
    public $table="pizza";
    protected $casts=['toppings'=>'array'];
}
