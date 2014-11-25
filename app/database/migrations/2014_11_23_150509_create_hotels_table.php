<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('hotels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->string('alamat');
			$table->string('jumlah_bintang');
			$table->time('waktu_check_in');
			$table->time('waktu_check_out');
			$table->string('folder_gallery_path');
			$table->longText('keterangan');
			$table->longText('kebijakan_pembatalan');
			$table->integer('kapasitas_kamar');
			$table->integer('sisa_kamar');
			$table->string('fasilitas_dasar')->nullable();
			$table->string('fasilitas_lain')->nullable();
			$table->integer('id_area')->unsigned();
			$table->longText('review_terbaik');
			$table->longText('maps_path');
			//pisahin hotel detail
			
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
		Schema::drop('hotels');
	}

}
