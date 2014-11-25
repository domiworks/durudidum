<?php
use Carbon\Carbon;

class CitiesController extends \BaseController 
{
	public function getFlightsInDate($keyword)
	{
		$result = City::where('nama_kota','LIKE','%'.$keyword.'%')->orWhere('nama_area','LIKE','%'.$keyword.'%')->get();
		
		return $result;
	}
}
