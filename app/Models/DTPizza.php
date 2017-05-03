<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTPizza extends DTCoreModel
{
    protected $table = 'DT_pizza';
    protected $fillable = ['id', 'pizzaName', 'pizza_base_id', 'pizza_cheese_id', 'calories'];

    public function connection()
    {
        return $this->belongsToMany( DTPizzaIngredients :: class,'DT_pizza_ingredients_connection','pizza_id', 'pizza_ ingredientsl');
    }
}
