<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDTPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DT_pizza', function(Blueprint $table)
		{
			$table->foreign('pizza_base_id', 'fk_DT_pizza_DT_pizza_base')->references('id')->on('DT_pizza_base')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pizza_cheese_id', 'fk_DT_pizza_DT_pizza_cheese1')->references('id')->on('DT_pizza_cheese')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DT_pizza', function(Blueprint $table)
		{
			$table->dropForeign('fk_DT_pizza_DT_pizza_base');
			$table->dropForeign('fk_DT_pizza_DT_pizza_cheese1');
		});
	}

}
