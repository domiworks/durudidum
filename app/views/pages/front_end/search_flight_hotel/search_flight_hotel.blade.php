@extends('layouts.front_end.front_layout')
@section('content')
<section>

	<div class="s_big_infoboard">
		<div class="container">
			<div class="row"> 
				<div class="col-md-3">
					<span>
						Jenis Pencarian (Flight, Hotel, Flight + Hotel)
					</span>
				</div>
				<div class="col-md-6">
					<span>
						Round Trip (or not)
					</span>
					<span>
						IATA Asal (JKT)
					</span>
					<span>
						Kota Asal (Jakarta, Indonesia)
					</span>
					<span>
						IATA Tujuan (LAX)
					</span>
					<span>
						Kota Tujuan (Los Angeles, USA)
					</span>
					<span>
						Waktu Pergi (24 Dec 2014)
					</span>
					<span>
						Waktu Pulang (24 Jan 2015)
					</span>

				</div>
				<div class="col-md-3">

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
					<?php for($i =0; $i < 3; $i++){
						?>
						<tr>
							<td>
								<img src="" width="114" height="114" class="s_hotel_pic pull-left" data-toggle="modal" data-target=".pop_up_view_hotel">
								<div>
									<span class="s_hotel_name" data-toggle="modal" data-target=".pop_up_view_hotel">Nama Hotel</span>
									<span class="s_hotel_city">Nama Kota, Negara</span>
									<button class="btn btn-primary btn-sm" style="display: block;" data-toggle="modal" data-target=".pop_up_view_hotel">Change Room</button>
								</div>
							</td>
							<td>
								<div style="overflow: hidden;" data-toggle="modal" data-target=".pop_up_view_flight">
									<div class="s_flight_sched_row">
										<img src="" width="32" height="32" class="s_maskapai_pic pull-left">
										<span class="s_maskapai_name">Nama Maskapai</span>
										<span class="s_flight_hour">00:00 - 00:00</span>
									</div>
									<div class="s_flight_sched_row">
										<img src="" width="32" height="32" class="s_maskapai_pic pull-left">
										<span class="s_maskapai_name">Nama Maskapai</span>
										<span class="s_flight_hour">00:00 - 00:00</span>
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
						<?php
					}?>
					
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