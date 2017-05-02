<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTPizza extends DTCoreModel
{
    protected $table = 'DT_pizza';
    protected $fillable = ['pizzaName','pizza_base_id','pizza_cheese_id','	calories'];
}
