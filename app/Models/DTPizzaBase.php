<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTPizzaBase extends DTCoreModel
{
    protected $table = 'DT_pizza_base';
    protected $fillable = ['name','calories'];
}
