<?php

use Illuminate\Database\Migrations\Migration;

class ResidentialLocation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('residential_location', function($table){
			$table->increments('id');
			$table->string('location');
			$table->timestamps();
	});
	}

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