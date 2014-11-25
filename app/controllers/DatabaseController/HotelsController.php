<?php
use Carbon\Carbon;

class HotelsController extends \BaseController 
{
	public function getFlightsInDate($date1)
	{
		$result = Hotel::where('sisa_kamar','>',0)->get();
		
		return $result;
	}
}
