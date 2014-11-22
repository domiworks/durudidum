@extends('layouts.front_end.front_layout')
@section('content')
<section>
	<div class="s_big_scenery"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div style="height: 350px;">
					<div class="s_tbl">
						<div class="s_cl">
							<span class="s_logo_only_white"></span>
							<div class="row">
								<div class="col-md-6 col-md-push-3">
									<p class="s_tagline" style="margin-top: 20px;">
										Your one click solution to reach the otherside of the world.
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12"> 

				<div class="s_quick_search">
					<ul class="s_quick_search_menu">
						<li>
							<a href="">Fligth</a>
						</li>
						<li>
							<a href="">Hotel</a>
						</li>
						<li class="s_quick_active">
							<a href="" >Flight + Hotel</a>
						</li>
					</ul>
					<div class="s_quick_search_form">
						<div class="s_cell">
							<div class="s_title">
								<span class="s_number">
									01
								</span>
								<span class="s_caption">
									City Destination
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 30px;">
								<div class="row">
									<div class="col-xs-9 col-xs-push-2">
										<form role="form">
											<div class="form-group">
												<label for="">Depart From</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
											<div class="form-group">
												<label for="">Arrive In</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
						<div class="s_cell">
							<span class="s_seprtr s_left"></span>
							<span class="s_seprtr s_right"></span>
							<div class="s_title">
								<span class="s_number">
									02
								</span>
								<span class="s_caption">
									Flight Time
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 30px;">
								<div class="row">
									<div class="col-xs-9 col-xs-push-2">
										<form role="form">
											<div class="form-group">
												<label for="">Depart Date</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
											<div class="form-group">
												<label for="">Return Date</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="s_cell">
							<div class="s_title">
								<span class="s_number">
									03
								</span>
								<span class="s_caption">
									Passenger Ticket
								</span>
							</div>
							<div class="container-fluid" style="margin-top: 30px;">
								<div class="row">
									<div class="col-xs-3 col-xs-push-2">
										<form role="form">
											<div class="form-group">
												<label for="">Adults</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
										</form>
									</div>
									<div class="col-xs-3 col-xs-push-2">
										<form role="form">
											<div class="form-group">
												<label for="">Kids</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
										</form>
									</div>
									<div class="col-xs-3 col-xs-push-2">
										<form role="form">
											<div class="form-group">
												<label for="">Infants</label>
												<input type="text" class="form-control" id="" placeholder="">
											</div>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-9 col-xs-push-2">
										<form role="form">
											<div class="form-group">
												<button class="btn btn-success col-xs-12">
													Find Your Ticket
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

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
@stop