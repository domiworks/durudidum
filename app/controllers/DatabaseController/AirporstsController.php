<?php
use Carbon\Carbon;

class AirporstsController extends \BaseController 
{
	public function getAllAirport()
	{
		$keyword = Input::get('keyword');
		$result = Airport::where('nama_bandara','LIKE','%'.$keyword.'%')->get();
		
		foreach($result as $res)
		{
			$res->city = City::find($res->id_kota);
		}
		
		return $result;
	}
}
