<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTPizzaIngredientsConnection extends DTCoreModel
{
    protected $table = 'DT_pizza_ingredients_connection';
    protected $fillable = ['calories','pizza_id','pizza_ ingredientsl'];
}
