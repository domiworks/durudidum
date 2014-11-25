<?php


class Hotel extends Eloquent
{
	protected $table = 'hotels';
	
	protected $fillable = ['nama', 'tipe_kamar', 'folder_gallery_path','harga_per_kamar_per_malam','kapasitas_kamar','sisa_kamar','fasilitas','id_area'];
}
