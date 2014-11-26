@extends('layouts.front_end.front_layout')
@section('content')
<section>	
	<div class="s_big_infoboard">
		<div class="container">
			<div class="row"> 
				<div class="col-md-12">
					<h1 style="font-family: oslite; color: #165978">
						Search Result
					</h1>
				</div>
			</div>
			<div class="row"> 
				<div class="col-md-3">
					<div class="f_search_result_node" style="text-align: center;">
						<span class="f_search_title">
							Search Type
						</span>
						<div>
							<img src="{{asset('assets/img/flight_hotel.png')}}" class="s_mt_30" width="133" height="133">
							<span class="s_mt_20 s_mb_30" style="font-family: hnbold; display: block;">
								Flight + Hotel
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">

					<div class="f_search_result_node">
						<span class="f_search_title">
							Round Trip
						</span>
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-4">
									<span style="font-family: hnreg; font-size: 18px; display: block;">
										From
									</span>
									<span style="font-family: hnbold; font-size: 60px; display: block;">
										CGK
									</span>
									<span style="font-family: hnbold; font-size: 16px; display: block;">
										Jakarta
									</span>
									<span style="font-family: hnreg; font-size: 16px; display: block;">
										Indonesia
									</span>
								</div>
								<div class="col-xs-4" style="text-align: center;">
									<img src="{{asset('assets/img/round_trip.png')}}" class="s_mt_30 s_mauto" width="133" height="133">
								</div>
								<div class="col-xs-4">
									<span style="font-family: hnreg; font-size: 18px; display: block;">
										To
									</span>
									<span style="font-family: hnbold; font-size: 60px; display: block;">
										DPS
									</span>
									<span style="font-family: hnbold; font-size: 16px; display: block;">
										Bali
									</span>
									<span style="font-family: hnreg; font-size: 16px; display: block;">
										Indonesia
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12" style="margin-top: 20px; margin-bottom: 30px;">
									<span>
										Waktu Pergi (29 Nov 2014)
									</span>
									<span>
										Waktu Pulang (5 Dec 2014)
									</span>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="col-md-3" >

					<div class="f_search_result_node">
						<span class="f_search_title">
							Passenger
						</span>
						<div>
							<span>
								Jumlah Adult (0)
							</span>
							<span>
								Jumlah Kids (0)
							</span>
							<span>
								Jumlah Infants (0)
							</span>
							<span>
								Jumlah Rooms (0)
							</span>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>



<div class="container" style="margin-top: 30px;">
	<div class="row">
	<div class="col-md-4 ">
		<button clicked="clicked" type="button" class="btn btn-success" style="width: 100%;">
			By Price
		</button>
		</div>
	<div class="col-md-4 ">
		<button type="button" class="col-md-4 btn btn-success" style="width: 100%;">
			By Rating
		</button>
		
		</div>
	<div class="col-md-4 ">
		<button type="button" class="col-md-4 btn btn-success active" style="width: 100%;" aria-pressed="true">
			By Expert 
		</button>
		
		</div>
	</div>
</div>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th width="45%">
							Hotels
						</th>
						<th width="45%">
							Flights
						</th>
						<th width="10%">
							Book
						</th>
					</tr>
				</thead>
				<tbody>
					<tr style="background-color: #fff;">
							<td>
								<img src="{{asset('assets/img/hotel1.jpg')}}" width="114" height="114" class="s_hotel_pic pull-left" data-toggle="modal" data-target=".pop_up_view_hotel">
								<div>
									<span class="s_hotel_name" data-toggle="modal" data-target=".pop_up_view_hotel">Fave Hotel</span>
									<span class="s_hotel_city">Bali, Indonesia</span>
									<button class="btn btn-primary btn-sm" style="display: block;" data-toggle="modal" data-target=".pop_up_view_hotel">Change Room</button>
								</div>
							</td>
							<td>
								<div style="overflow: hidden;" data-toggle="modal" data-target=".pop_up_view_flight">
									<div class="s_flight_sched_row">
										<img src="{{asset('assets/img/garuda1.jpg')}}" width="32" height="32" class="s_maskapai_pic pull-left">
										<span class="s_maskapai_name">Garuda Indonesia</span>
										<span class="s_flight_hour">10:30 - 12:30 / 29-11-2014</span>
									</div>
									<div class="s_flight_sched_row">
										<img src="{{asset('assets/img/garuda1.jpg')}}" width="32" height="32" class="s_maskapai_pic pull-left">
										<span class="s_maskapai_name">Garuda Indonesia</span>
										<span class="s_flight_hour">08:00 - 10:00 / 5-12-2014</span>
									</div>
								</div>
								<button class="btn btn-primary btn-sm" style="display: block; margin-left: 47px;">Change Flights</button>
							</td> 
							<td>
								<button class="btn btn-warning">
									Book 
								</button> 
							</td> 
						</tr>
						<tr style="background-color: #fff;">
							<td>
								<img src="{{asset('assets/img/hotel2.jpg')}}" width="114" height="114" class="s_hotel_pic pull-left" data-toggle="modal" data-target=".pop_up_view_hotel">
								<div>
									<span class="s_hotel_name" data-toggle="modal" data-target=".pop_up_view_hotel">Amaris Hotel</span>
									<span class="s_hotel_city">Bali, Indonesia</span>
									<button class="btn btn-primary btn-sm" style="display: block;" data-toggle="modal" data-target=".pop_up_view_hotel">Change Room</button>
								</div>
							</td>
							<td>
								<div style="overflow: hidden;" data-toggle="modal" data-target=".pop_up_view_flight">
									<div class="s_flight_sched_row">
										<img src="{{asset('assets/img/garuda1.jpg')}}" width="32" height="32" class="s_maskapai_pic pull-left">
										<span class="s_maskapai_name">Garuda Indonesia</span>
										<span class="s_flight_hour">10:30 - 12:30 / 29-11-2014</span>
									</div>
									<div class="s_flight_sched_row">
										<img src="{{asset('assets/img/garuda1.jpg')}}" width="32" height="32" class="s_maskapai_pic pull-left">
										<span class="s_maskapai_name">Garuda Indonesia</span>
										<span class="s_flight_hour">09:00 - 11:00 / 5-12-2014</span>
									</div>
								</div>
								<button class="btn btn-primary btn-sm" style="display: block; margin-left: 47px;">Change Flights</button>
							</td> 
							<td>
								<button class="btn btn-warning">
									Book 
								</button> 
							</td> 
						</tr>
						<tr style="background-color: #fff;">
							<td>
								<img src="{{asset('assets/img/hotel3.jpg')}}" width="114" height="114" class="s_hotel_pic pull-left" data-toggle="modal" data-target=".pop_up_view_hotel">
								<div>
									<span class="s_hotel_name" data-toggle="modal" data-target=".pop_up_view_hotel">Tune Hotel</span>
									<span class="s_hotel_city">Bali, Indonesia</span>
									<button class="btn btn-primary btn-sm" style="display: block;" data-toggle="modal" data-target=".pop_up_view_hotel">Change Room</button>
								</div>
							</td>
							<td>
								<div style="overflow: hidden;" data-toggle="modal" data-target=".pop_up_view_flight">
									<div class="s_flight_sched_row">
										<img src="{{asset('assets/img/garuda1.jpg')}}" width="32" height="32" class="s_maskapai_pic pull-left">
										<span class="s_maskapai_name">Garuda Indonesia</span>
										<span class="s_flight_hour">8:30 - 10:30 / 29-11-2014</span>
									</div>
									<div class="s_flight_sched_row">
										<img src="{{asset('assets/img/garuda1.jpg')}}" width="32" height="32" class="s_maskapai_pic pull-left">
										<span class="s_maskapai_name">Garuda Indonesia</span>
										<span class="s_flight_hour">10:30 - 12:30 / 5-12-2014</span>
									</div>
								</div>
								<button class="btn btn-primary btn-sm" style="display: block; margin-left: 47px;">Change Flights</button>
							</td> 
							<td>
								<button class="btn btn-warning">
									Book 
								</button> 
							</td> 
						</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-12">
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div>
	</div>
</div>
</section>
<style>
[data-toggle="modal"] {
	cursor: pointer;
}
</style>

@include('pages.front_end.search_flight_hotel.pop_up_view_hotel')
{{-- @include('pages.front_end.search_flight_hotel.pop_up_view_change_room') --}}
@include('pages.front_end.search_flight_hotel.pop_up_view_flight')
@stop