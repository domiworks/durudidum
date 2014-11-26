<?php

class HotelRoom extends Eloquent
{
	protected $table = 'hotel_rooms';
	
	protected $fillable = ['tipe_kamar',
							'kapasitas_kamar',
							'harga_per_kamar_per_malam',
							'sisa_kamar',
							'id_hotel'];
}
