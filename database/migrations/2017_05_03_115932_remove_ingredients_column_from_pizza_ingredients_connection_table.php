<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveIngredientsColumnFromPizzaIngredientsConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('DT_pizza_ingredients_connection', function($table) {
            $table->dropColumn(' ingredients');

        });
    }

    public function down()
    {
        Schema::table('DT_pizza_ingredients_connection', function($table) {
            $table->string(' ingredients', 225);

        });
    }
}
