<?php
use Carbon\Carbon;

class FlightsController extends \BaseController 
{
	public function getFlightsInDate($date, $airport1, $airport2)
	{
		$result = Flight::where('tanggal_berangkat','=',$date1)->where('id_bandara_berangkat', '=', $airport1 )->where('id_berangkat_sampai', '=', $airport2)->get();
		
		return $result;
	}
}
