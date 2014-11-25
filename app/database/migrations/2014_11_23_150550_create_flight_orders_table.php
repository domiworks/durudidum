<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('flight_orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kode_pemesanan');
			$table->string('titel');
			$table->string('nama_pesanan');
			$table->integer('jumlah_bagasi');
			$table->string('jumlah_bagasi');
			$table->integer('id_user')->unsigned();
			$table->integer('id_penerbangan')->unsigned();
			$table->integer('jumlah_orang');
			$table->decimal('total_harga',11,2);
			
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
		Schema::drop('flight_orders');
	}

}
