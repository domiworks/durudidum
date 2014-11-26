<?php


class Hotel extends Eloquent
{
	// public $timestamps = true;
	protected $table = 'hotels';	
	
	protected $fillable = ['nama',
							'alamat',
							'telepon',
							'jumlah_bintang',
							'waktu_check_in',
							'waktu_check_out',							
							'folder_gallery_path',
							'hotel_detail',
							'keterangan',
							'kebijakan_pembatalan',
							'fasilitas_dasar',
							'fasilitas_lain',
							'id_area',
							'review_terbaik',
							'maps_path'];
}
