<?php

use Illuminate\Database\Migrations\Migration;

class MedicalSpecificproblems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medical_specificproblems', function($table){
			$table->increments('id');
			$table->string('problem');
			$table->string('specific_problem');
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