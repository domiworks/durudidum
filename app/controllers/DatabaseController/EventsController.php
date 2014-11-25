<?php
use Carbon\Carbon;

class EventsController extends \BaseController 
{
	public function getFlightsInDate($area)
	{
		$result = Event::where('nama_area','=',$keyword)->get();
		
		return $result;
	}
}
