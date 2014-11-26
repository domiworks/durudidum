<?php


class Flight extends Eloquent
{
	protected $table = 'flights';
		
	protected $fillable = ['maskapai', 
							'logo_maskapai_path', 
							'tanggal_berangkat',
							'tanggal_tiba',
							'jam_berangkat',
							'jam_tiba',
							'zona_waktu',
							'fasilitas',
							'harga_per_orang',
							'sisa_kursi',
							'id_bandara_berangkat',
							'id_bandara_sampai'];
}
