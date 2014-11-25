<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('hotel_reviews', function(Blueprint $table)
		{
			$table->increments('id');
			$table->longText('review');
			$table->string('review_oleh');
			$table->integer('rate');
			$table->integer('id_hotel')->unsigned();
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
