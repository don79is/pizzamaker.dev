<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAutoInPizzaCheeseTableCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('DT_pizza_cheese', function (Blueprint $table)
        {


            $table->integer('count', true)->change();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DT_pizza_cheese', function (Blueprint $table) {

            $table->integer('count')->change();


        });
    }
}
