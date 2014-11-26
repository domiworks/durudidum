<?php


class FlightOrder extends Eloquent
{
	protected $table = 'flight_orders';
	
	protected $fillable = ['kode_pemesanan',
							'titel',
							'nama_pemesanan',
							'jumlah_bagasi',
							'harga_bagasi',
							'id_user',
							'id_penerbangan',
							'jumlah_orang',
							'total_harga']; 
}
