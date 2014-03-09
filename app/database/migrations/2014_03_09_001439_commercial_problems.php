<?php

use Illuminate\Database\Migrations\Migration;

class CommercialProblems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commercial_problems', function($table){
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