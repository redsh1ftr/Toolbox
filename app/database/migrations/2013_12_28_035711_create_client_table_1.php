<?php

use Illuminate\Database\Migrations\Migration;

class CreateClientTable1 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_list', function($table){
			$table->increments('id');
			$table->integer('client_id');
			$table->string('business_name');
			$table->string('business_type');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('office_manager');
			$table->string('street1');
			$table->string('street2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('hours');
			$table->string('net_terms');
			$table->string('phone');
			$table->string('fax');
			$table->string('email');
			$table->integer('work_order_number');
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
		Schema::drop('client_list');
	}

}