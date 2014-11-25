<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('flights', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('maskapai');
			$table->string('logo_maskapai_path');
			$table->date('tanggal_berangkat');
			$table->date('tanggal_tiba');
			$table->time('jam_berangkat');
			$table->time('jam_tiba');
			$table->string('zona_waktu');
			$table->string('fasilitas')->nullable();
			$table->decimal('harga_per_orang', 11,2);
			$table->integer('sisa_kursi');
			$table->integer('id_bandara_berangkat')->unsigned();
			$table->integer('id_bandara_sampai')->unsigned();
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
		Schema::drop('flights');
	}

}
