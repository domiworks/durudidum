<?php
use Carbon\Carbon;

class AirporstsController extends \BaseController 
{
	public function getFlightsInDate($keyword)
	{
		$result = Airport::where('nama_bandara','LIKE','%'.$keyword.'%')->get();
		
		foreach($result as $res)
		{
			$res->city = City::find($result->id_kota);
		}
		
		return $result;
	}
}
