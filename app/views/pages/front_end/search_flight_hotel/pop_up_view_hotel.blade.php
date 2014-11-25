<div class="modal fade pop_up_view_hotel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">	
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Nama Hotel Taro Disini</h4>
				
			</div>
			<form class="form-horizontal" role="form">								
				<div class="modal-body nopad">

					<ul class="nav nav-tabs" role="tablist" id="myTab">
						<li role="presentation" class="active"><a href="#f_t_0" aria-controls="home" role="tab" data-toggle="tab">Highlight</a></li>
						<li role="presentation"><a href="#f_t_1" aria-controls="profile" role="tab" data-toggle="tab">Facilities &amp; Info</a></li>
						<li role="presentation"><a href="#f_t_2" aria-controls="messages" role="tab" data-toggle="tab">Photos</a></li>
						<li role="presentation"><a href="#f_t_3" aria-controls="settings" role="tab" data-toggle="tab">Map</a></li>
						<li role="presentation"><a href="#f_t_4" aria-controls="settings" role="tab" data-toggle="tab">Traveller Reviews</a></li>
						<li role="presentation"><a href="#f_t_5" aria-controls="settings" role="tab" data-toggle="tab">Rooms &amp; Rates</a></li>
					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="f_t_0">
							@include('pages.front_end.search_flight_hotel.tab_hotel_highlights')
						</div>
						<div role="tabpanel" class="tab-pane" id="f_t_1">
							@include('pages.front_end.search_flight_hotel.tab_hotel_fac_info')
						</div>
						<div role="tabpanel" class="tab-pane" id="f_t_2">
							@include('pages.front_end.search_flight_hotel.tab_hotel_photos')
						</div>
						<div role="tabpanel" class="tab-pane" id="f_t_3">d</div>
						<div role="tabpanel" class="tab-pane" id="f_t_4">e</div>
						<div role="tabpanel" class="tab-pane" id="f_t_5">f</div>
					</div>

					<script>
					$(function () {
						$('#myTab a:first').tab('show');
					})
					</script>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
				</div>
			</form>
		</div>
	</div>
</div>
