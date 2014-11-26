<?php
use Carbon\Carbon;

class EventsController extends \BaseController 
{
	public function getAllEvents($area)
	{
		$result = Event::where('nama_area','=',$keyword)->get();
		
		return $result;
	}
}
