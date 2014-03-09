<?php

use Illuminate\Database\Migrations\Migration;

class CommercialLocation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commecial_location', function($table){
			$table->increments('id');
			$table->string('location');
			$table->timestamps();
	});	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}