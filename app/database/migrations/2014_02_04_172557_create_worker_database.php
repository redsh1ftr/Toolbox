<?php

use Illuminate\Database\Migrations\Migration;

class CreateWorkerDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('workers', function($table){
			$table->increments('id');
			$table->string('worker_name');
			$table->string('title');
			$table->string('first');
			$table->string('last');
			$table->string('phone');
			$table->string('email');
			$table->string('street1');
			$table->string('street2');
			$table->string('city');
			$table->string('state');
			$table->integer('zip');
			$table->text('monday');
			$table->text('tuesday');
			$table->text('wednesday');
			$table->text('thursday');
			$table->text('friday');
			$table->text('saturday');
			$table->text('sunday');
			$table->integer('rate');
			$table->longtext('notes');
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