<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDTPizzaIngredientsConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DT_pizza_ingredients_connection', function(Blueprint $table)
		{
			$table->foreign('pizza_id', 'fk_DT_pizza_ ingredients_connection_DT_pizza1')->references('id')->on('DT_pizza')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pizza_ ingredientsl', 'fk_DT_pizza_ ingredients_connection_DT_pizza_ ingredients1')->references('id')->on('DT_pizza_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DT_pizza_ingredients_connection', function(Blueprint $table)
		{
			$table->dropForeign('fk_DT_pizza_ ingredients_connection_DT_pizza1');
			$table->dropForeign('fk_DT_pizza_ ingredients_connection_DT_pizza_ ingredients1');
		});
	}

}
