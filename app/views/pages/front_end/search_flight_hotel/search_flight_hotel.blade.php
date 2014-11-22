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
						IATA Asal
					</span>
					<span>
						Kota Asal
					</span>
					<span>
						IATA Tujuan
					</span>
					<span>
						Kota Tujuan
					</span>
					<span>
						Waktu Pergi
					</span>
					<span>
						Waktu Pulang
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

				</div>
			</div>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
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
					<tr>
						<td>
							<a href="javascript:void(0)" data-toggle="modal" data-target=".pop_up_view_hotel">
								<img src="" width="100" height="100" class="s_hotel_pic pull-left">
								<div>
									<span class="s_hotel_name">Nama Hotel</span>
									<span class="s_hotel_city">Nama Kota, Negara</span>
								</div>
							</a>
						</td>
						<td>
							<a href="javascript:void(0)" data-toggle="modal" data-target=".pop_up_view_flight">
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
							</a>
						</td> 
						<td>
							<button class="btn btn-warning">
								Book 
							</button> 
						</td> 
					</tr>
					<tr>
						<td>
							<a href="javascript:void(0)" data-toggle="modal" data-target=".pop_up_view_hotel">
								<img src="" width="100" height="100" class="s_hotel_pic pull-left">
								<div>
									<span class="s_hotel_name">Nama Hotel</span>
									<span class="s_hotel_city">Nama Kota, Negara</span>
								</div>
							</a>
						</td>
						<td>
							<a href="javascript:void(0)" data-toggle="modal" data-target=".pop_up_view_flight">
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
							</a>
						</td> 
						<td>
							<button class="btn btn-warning">
								Book 
							</button> 
						</td> 
					</tr>
					<tr>
						<td>
							<a href="javascript:void(0)" data-toggle="modal" data-target=".pop_up_view_hotel">
								<img src="" width="100" height="100" class="s_hotel_pic pull-left">
								<div>
									<span class="s_hotel_name">Nama Hotel</span>
									<span class="s_hotel_city">Nama Kota, Negara</span>
								</div>
							</a>
						</td>
						<td>
							<a href="javascript:void(0)" data-toggle="modal" data-target=".pop_up_view_flight">
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
							</a>
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

@include('pages.front_end.search_flight_hotel.pop_up_view_hotel')
@include('pages.front_end.search_flight_hotel.pop_up_view_flight')
@stop