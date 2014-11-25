<?php
use Carbon\Carbon;

class FlightsController extends \BaseController 
{
	public function getFlightsInDate($date1)
	{
		$result = Flight::where('tanggal_berangkat','=',$date1)->get();
		
		return $result;
	}
}
