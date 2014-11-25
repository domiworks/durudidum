<?php


class Airport extends Eloquent
{
	protected $table = 'airports';
	
	protected $fillable = ['kode_bandara', 'nama_bandara', 'id_kota'];
}
