<?php


class City extends Eloquent
{
	protected $table = 'cities';
	
	protected $fillable = ['nama_kota', 'nama_area'];
}
