<?php

use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('reservations',function($table){
			$table->increments('id');
			$table->timestamps();
			$table->integer('client_id');
			$table->string('booking_number', 45);
			$table->integer('status');
			$table->date('booked_from');
			$table->date('booked_to');
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
		Schema::drop('reservations');
	}

}