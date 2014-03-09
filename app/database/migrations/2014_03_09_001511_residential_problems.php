<?php

use Illuminate\Database\Migrations\Migration;

class ResidentialProblems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('residential_problems', function($table){
			$table->increments('id');
			$table->string('location');
			$table->string('problem');
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