<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTPizzaIngredientsConnection extends DTCoreModel
{
    protected $table = 'DT_pizza_ingredients_connection';
    protected $fillable = ['ingredients','calories','pizza_id','ingredientsl'];
}
