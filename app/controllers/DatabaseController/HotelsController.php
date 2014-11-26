<?php
use Carbon\Carbon;

class HotelsController extends \BaseController 
{
	public function getFlightsInDate($date1)
	{
		$result = Hotel::where('sisa_kamar','>',0)->get();
		
		return $result;
	}
	
	public function getAllHotel()
	{
		$hotel = Hotel::all();
		if(count($hotel) != 0)
		{
			foreach($hotel as $key)
			{
				$area = DB::table('cities')->where('id', '=', $key->id_area)->first();
				$key->area = $area->id; 
			}
			return $hotel;
		}
		else
		{
			return "";
		}		
				
	}
}
