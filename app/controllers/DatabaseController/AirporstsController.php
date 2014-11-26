<?php
use Carbon\Carbon;

class AirporstsController extends \BaseController 
{
	public function getAllAirport()
	{
		$keyword = Input::get('keyword');
		$result = Airport::join('cities','airports.id_kota','=','cities.id')->where('airports.nama_bandara','LIKE','%'.$keyword.'%')->orWhere('cities.nama_kota','LIKE','%'.$keyword.'%')->get();
		
		foreach($result as $res)
		{
			$res->city = City::find($res->id_kota);
		}
		
		return $result;
	}
}
