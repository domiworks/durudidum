<?php
use Carbon\Carbon;

class CitiesController extends \BaseController 
{
	public function getAllCity($keyword)
	{
		$result = City::where('nama_kota','LIKE','%'.$keyword.'%')->orWhere('nama_area','LIKE','%'.$keyword.'%')->get();
		
		return $result;
	}
}
