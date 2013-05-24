<?php

use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('clients',function($table){
			$table->increments('id');
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('email');
			$table->text('address');
			$table->string('company_name');
			$table->text('company_address');
			$table->string("tel_no");
			$table->string('fax_no');
			$table->string('mobile_no');
			$table->string('carplate_no');
			$table->integer('status');
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
		Schema::drop('clients');
	}

}