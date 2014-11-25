<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_event');
			$table->date('tanggal_event');
			$table->longText('deskripsi');
			$table->integer('id_area')->unsigned();
			$table->string('posted_by');
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
		Schema::drop('events');
	}

}
