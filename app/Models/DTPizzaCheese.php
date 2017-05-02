<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTPizzaCheese extends DTCoreModel
{
    protected $table = 'DT_pizza_cheese';
    protected $fillable = ['id','name','calories'];
}
