<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTPizzaIngredientsConnection extends DTCoreModel
{
    protected $table = 'DT_pizza_ingredients_connection';
    protected $fillable = ['pizza_id','ingredient_id'];

    public  function ingredients()
    {
        return $this->hasOne( DTPizzaIngredients:: class, 'id', 'ingredient_id' );
    }
}
