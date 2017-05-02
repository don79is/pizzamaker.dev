<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTPizzaIngredients extends DTCoreModel
{
    protected $table = 'DT_pizza_ingredients';
    protected $fillable = ['id','ingredients','calories'];
}
