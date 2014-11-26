<?php


class HotelOrder extends Eloquent
{
	protected $table = 'hotel_orders';
	
	protected $fillable = ['kode_pemesanan',
							'id_user',
							'id_hotel',
							'jumlah_kamar',
							'total_harga',
							'catatan_khusus',
							'tanggal_masuk',
							'tanggal_keluar'];
}
