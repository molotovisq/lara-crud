<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory;
    //use Searchable;

    //Necessario para que nao ocorra o erro do _token
    protected $fillable = ['name', 'price', 'quant'];


}
