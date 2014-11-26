<?php


class WanderEvent extends Eloquent
{
	protected $table = 'events';
	
	protected $fillable = ['nama_event', 
							'tanggal_event',
							'deskripsi',
							'id_area', 
							'posted_by'];
}
