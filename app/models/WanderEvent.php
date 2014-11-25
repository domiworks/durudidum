<?php


class WanderEvent extends Eloquent
{
	protected $table = 'events';
	
	protected $fillable = ['nama_event', 'id_area', 'posted_by','tanggal_event','deskripsi'];
}
