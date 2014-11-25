<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('hotel_orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kode_pemesanan');
			$table->integer('id_user')->unsigned();
			$table->integer('id_hotel')->unsigned();
			$table->integer('jumlah_kamar');
			$table->decimal('total_harga',11,2);
			$table->longText('catatan_khusus');
			$table->date('tanngal_masuk');
			$table->date('tanngal_keluar');
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
		Schema::drop('hotel_orders');
	}

}
