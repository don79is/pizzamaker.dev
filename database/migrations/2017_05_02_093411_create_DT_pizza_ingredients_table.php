<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDTPizzaIngredientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DT_pizza_ingredients', function(Blueprint $table)
		{
			$table->integer('count')->unique('count_UNIQUE');
			$table->string('id', 36)->unique('id_UNIQUE')->primary('id_PRIMARY');
			$table->timestamps();
			$table->softDeletes();
			$table->string(' ingredients', 225);
			$table->integer('calories');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('DT_pizza_ingredients');
	}

}
