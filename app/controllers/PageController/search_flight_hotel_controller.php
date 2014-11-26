<?php
use Carbon\Carbon;

class AirporstsController extends \BaseController 
{
	public function view()
	{
		$id_depart = Input::get('id_depart');
		$id_arrive = Input::get('id_arrive');
		$depart_date = Input::get('depart_date');
		$return_date = Input::get('return_date');
		$adults = Input::get('adults');
		$kids = Input::get('kids');
		$infants = Input::get('infants');
		$rooms = Input::get('rooms');
		
		$depart = Airport::find($id_depart);
		$arrive = Airport::find($id_arrive);
		
		
		// $keyword = Input::get('keyword');
		// $result = City::join('airports','airports.id_kota','=','cities.id')->where('airports.nama_bandara','LIKE','%'.$keyword.'%')->orWhere('cities.nama_kota','LIKE','%'.$keyword.'%')->get();
		
		// foreach($result as $res)
		// {
			// $res->city = City::find($res->id_kota);
		// }
		
		// return $result;
	}
		
}
