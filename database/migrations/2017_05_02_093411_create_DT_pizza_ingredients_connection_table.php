<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDTPizzaIngredientsConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DT_pizza_ingredients_connection', function(Blueprint $table)
		{
			$table->integer('count')->unique('count_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string(' ingredients', 225);
			$table->string('pizza_id', 225)->index('fk_DT_pizza_ingredients_connection_DT_pizza1_idx');
			$table->string('pizza_ ingredientsl', 225)->index('fk_DT_pizza_ingredients_connection_DT_pizza_ingredients1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('DT_pizza_ingredients_connection');
	}

}
