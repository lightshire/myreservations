<?php

use Illuminate\Database\Migrations\Migration;

class AddHotelIdInReservations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		if(Schema::hasTable('reservations')){
			Schema::table('reservations',function($table){
				$table->integer('hotel_id');
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		if(Schema::hasTable('reservations') && Schema::hasColumn('reservations','hotel_id')){
			Schema::table('reservations',function(){
				$table->dropColumn('hotel_id');
			});
		}
	}

}