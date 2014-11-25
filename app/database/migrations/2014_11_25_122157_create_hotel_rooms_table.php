<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('hotel_rooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tipe_kamar');
			$table->integer('kapasitas_kamar');
			$table->decimal('harga_per_kamar_malam',11,2);
			$table->integer('sisa_kamar');
			$table->integer('id_hotel')->unsigned();
			$table->timestamps();
		});
		//pisahin hotel detail
		
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('hotel_rooms');
	}

}
