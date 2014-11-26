@extends('layouts.front_end.book_layout')
@section('content')


<section>
	<div class="container">
		<div class="row" style="">
			<form class="form-horizontal">


				<div class="col-md-8">      
					<h1>Pemesanan Penerbangan</h1>
					<div class="panel panel-default">
						<div class="panel-heading">Isi data pemesan yang dapat dihubungi</div>
						<div class="panel-body">
							<div class="form-group">
								<label class="col-md-3 control-label">Nama</label>
								<div class="col-md-7">
									<input class="form-control" type="text" value="user1"   />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Phone Number</label>
								<div class="col-md-7">
									<input class="form-control" type="text" value="0227345373"   />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Alamat Email</label>
								<div class="col-md-7">
									<input class="form-control" type="text" value="test@test.com"   />
								</div>
							</div>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-body">
							<h3>Data Penumpang</h3>

							<div class="form-group col-md-4">
								<label class="col-md-3">Titel</label>
								<label  class="col-md-1">:</label>
								<input class="col-md-5" type="text" value="Tuan"   />
							</div>
							<div class="form-group col-md-8">
								<label class="col-md-5">Nama sesuai KTP/SIM/Passport</label>
								<label  class="col-md-1">:</label>
								<input class="col-md-6" type="text"  value="user1"  />
							</div>
							<div class="form-group col-md-12">
								<label class="col-md-3">Bagasi<span></span></label>
								<label  class="col-md-1">:</label>
								<select class="col-md-5" type="text" value="">
									<option>15kg(Free)</option>
									<option>20kg(Rp.50.000)</option>
									<option>25kg(Rp.75.000)</option>
									<option>30kg(Rp.100.000)</option>
								</select>
							</div>
						</div>
					</div>




					<br>

					<h1>Pemesanan Hotel</h1>
					


					<div class="col-md-12" style="border:1px solid;margin-bottom:10px;">
						<h3>Data pemesan</h3>
						<div class="form-group col-md-12">
							<label class="col-md-3">Nama</label>
							<label  class="col-md-1">:</label>
							<input class="col-md-5" type="text" value="user1"  />
						</div>
						<div class="form-group col-md-12">
							<label class="col-md-3">Nomor telepon</label>
							<label  class="col-md-1">:</label>
							<input class="col-md-4" type="text" value="0227345373"  />
						</div>
						<div class="form-group col-md-12">
							<label class="col-md-3">Alamat email</label>
							<label  class="col-md-1">:</label>
							<input class="col-md-5" type="text" value="test@test.com" />
						</div>
						<div class="form-group col-md-12">
							<label class="col-md-3">Nama Lengkap Tamu</label>
							<label  class="col-md-1">:</label>
							<input class="col-md-5" type="text" value="user1"  />
							<div class="checkbox col-md-3">
								<label>
									<input type="checkbox"> Sama dengan pemesan
								</label>
							</div>
						</div>

					</div>

					<h3>Permintaan khusus (opsional)</h3>
					<textarea class="col-md-12" rows="5"></textarea>
					<div>
						<p>Catatan: Permintaan spesifik bergantung pada ketersediaan setiap hotel dan tidak dapat dijamin. Check-in awal atau Transfer Bandara dapat menimbulkan biaya ekstra. Silakan hubungi pihak hotel untuk memastikan.</p>
					</div>

					<div>

						<p><strong>Keterangan</strong> </p>
						<p>Free Wifi//Large Dormitory consist of 22 beds in shared dormitory room. </p>
						<br>

						<p><strong>Kebijakan pembatalan</strong></p>
						<p>Gratis biaya pembatalan sampai 25 Mar 2015 23:59 waktu hotel setempat.</p>
					</div>
					<div>

						<div class="row">
							<div class="col-md-5">

								<input type="checkbox"> 
								<p class="error" style="display:none">Anda harus menyetujui syarat dan ketentuan.</p>
								Dengan ini saya telah membaca dan menyetujui
								<a href="/hotel/termhotelbeds" target="_blank">Syarat dan Ketentuan serta Kebijakan Hotel dari HotelBeds</a>
								sebagai partner resmi hotel Traveloka.com


							</div>
							<div class="col-md-7">
								
								<p style="text-align:right;"><a href="http://localhost/durudidum_new/public/test/booking_review_flight_hotel"><input type="button" class="btn btn-info" value="submit"   /></a></p>

							</div>
						</div>


					</div>
				</form>
			</div>




			<div class="col-md-4">
				<div class="col-md-12" style="margin-bottom:10px;">
					<h3>Rincian Penerbangan</h3>
					<div class="col-md-12">Penerbangan: <span>29 Nov 2014</span></div>
					<div class="col-md-12">
						<table>
							<tr>
								<td></td>
								<td colspan="3"><span>Jakarta(CKG)</span></td>
							</tr>
							<tr>
								<td>|</td>
								<td rowspan="2"> </td>
								<td rowspan="2"> </td>
								<td>10:30</td>

							</tr>
							<tr>
								<td>|</td>
								<td>12:30</td>
							</tr>
						</table>
						<table>
							<tr>
								<td></td>
								<td colspan="3"><span>Bali / Denpasar (DPS)</span></td>
							</tr>
						</table>
						<table>
							<tr>
								<td></td>
								<td colspan="3"><span>Bali / Denpasar (DPS)</span></td>
							</tr>
							<tr>
								<td>|</td>
								<td rowspan="2"> </td>
								<td rowspan="2"> </td>
								<td>08:00</td>

							</tr>
							<tr>
								<td>|</td>
								<td>10:00</td>
							</tr>
						</table>
						<table>
							<tr>
								<td></td>
								<td colspan="3"><span>Jakarta (CKG)</span></td>
							</tr>
						</table>
					</div>
					<p style="color:#aaa;font-size=10px;">Semua waktu adalah waktu lokal bandara</p>
				</div>
				<div class="col-md-12" style="margin-bottom:10px;">
					<h3>Rincian Biaya Penerbangan</h3>
					<table>
						<tr>
							<td>Garuda Indonesia (Dewasa) <span class="noPass">x2</span>:</td>
							<td><strong>Rp</strong></td>
							<td><strong>1.050.200</strong></td>
						</tr>
						<tr id="totalBaggageFeeContainer">
							<td>Harga Bagasi:</td>
							<td><strong>Rp</strong></td>
							<td>0</td>
						</tr>
						<tr style="display: none;" id="transitServicePriceDetail">
							<td>Transit Service:</td>
							<td><strong>Rp</strong></td>
							<td>0</td>
						</tr>
						<tr>
							<td style="color: #23B452">Biaya transaksi:</td>
							<td></td>
							<td><strong>GRATIS</strong></td>
						</tr>
					</table>
					<table>
						<tr>
							<td>Total:</td>
							<td >Rp 1.050.200</td>
						</tr>
					</table>
					<p>
						Maskapai tetap dapat meng-update harga.<br>Harga final akan Anda dapatkan di halaman<br>review pembayaran.
					</p>
				</div>

				<div class="col-md-12" style="margin-bottom:10px;">
					<div class="tv-bg-gray tvHotelBookingDetail">
						<h2>Rincian Pemesanan</h2>
						<div class="clearfix tvHotelBookingImageName">
							<div class="bookedHotelImage" load-src="{{asset('assets/img/hotel1.jpg')}}" style="width: 70px; height: 70px; position: relative; overflow: hidden; background-color: rgb(67, 67, 67);"><img class="tv-loading-sign" src="https://asset.traveloka.com/assets/images/misc/loading3-300001.gif" style="width: 18px; height: 18px; position: absolute; left: 26px; top: 26px; max-width: none;"><img src="https://images.travelnow.com/hotels/7000000/6490000/6485600/6485514/6485514_5_t.jpg" style="position: absolute; left: 0px; top: 0px; width: 70px; height: 70px; max-width: none; background-color: rgb(0, 0, 0);"><img src="https://images.travelnow.com/hotels/7000000/6490000/6485600/6485514/6485514_5_t.jpg" style="position: absolute; left: 0px; top: 0px; width: 70px; height: 70px; max-width: none; background-color: rgb(0, 0, 0);"></div>
							<div class="hotelName" style="width: 200px; float: left;">
								<h3>
									<span class="hotelNameDisplay">Fave Hotel</span>
									<span class="hotelRatingDisplay">

									</div></span>
								</h3>


								<div class="hotelAmenitiesDisplay clearfix">
									<div class="breakfastIncluded" style="">
										<div style="float:left;" class="tv-icon hotel-restaurant-s"></div>
										<div style="float:left;" class="facilityLabel clearfix">
											Free Breakfast
										</div>
									</div>
									<div class="wifiIncluded" style="display: none;">
										<div style="float:left;" class="tv-icon hotel-wifi-s"></div>
										<div style="float:left;;" class="facilityLabel">
											Free WiFi
										</div>
									</div>
								</div>
							</div>
						</div>
						<table>
							<tbody><tr>
								<td style="width: 150px;">Durasi:</td>
								<td class="hotelBookingRightContent">
									<strong>
										<span class="durationNightDisplay">1</span>
										malam
									</strong>
								</td>
							</tr>
							<tr>
								<td>Check-in:</td>
								<td class="hotelBookingRightContent"><strong><div class="checkInDate">Jum, 27 Mar 2015</div></strong></td>
							</tr>
							<tr>
								<td>Check-out:</td>
								<td class="hotelBookingRightContent"><strong><div class="checkOutDate">Sab, 28 Mar 2015</div></strong></td>
							</tr>
							<tr>
								<td>Tipe kamar:</td>
								<td class="hotelBookingRightContent">
									<strong>
										<div class="roomName">BED IN SHARED ROOM LARGE SIZE DORMITORY SINGLE</div>
										<div class="roomAdditionalDescription"></div>
									</strong>
								</td>
							</tr>
							<tr>
								<td>Jumlah kamar:</td>
								<td class="hotelBookingRightContent">
									<strong>
										<span class="numberOfRooms">1</span>
										kamar
									</strong>
								</td>
							</tr>
							<tr>
								<td>Tamu per kamar:</td>
								<td class="hotelBookingRightContent">
									<strong>
										<span class="numberOfGuest">1</span> orang
									</strong>
								</td>
							</tr>
						</tbody></table>
					</div>
					<div class="col-md-12" style="margin-bottom:10px;">
						<div class="tv-bg-gray clearfix tvHotelBookingPrice">
							<h2>Rincian Harga</h2>
							<table>
								<tbody><tr>
									<td>
										<p>Harga Kamar (x<span class="hotelBookingNumberOfRooms">1</span>)</p>
										<p><span class="priceDetail">(Detail)</span></p>
									</td>
									<td class="hotelBookingRightContent">
										<strong>
											<span class="hotelBookingPrice" ><strong>Rp 141.208</span></strong></td>
										</tr>
										<tr class="hotelBookingDetailedRoomDisplay" style="display: none;">
											<td colspan="2">
												<table class="hotelBookingDetailedRoomDisplayBreakdown"><tbody><tr><td class="roomIndex" data-index="0">Kamar 1</td><td class="roomPriceTotal">Rp 141.208</td></tr></tbody></table>
											</td>
										</tr>

										<tr class="hotelBookingTaxDisplay">
											<td>Biaya Pemulihan Pajak</td>
											<td class="hotelBookingRightContent">
												<strong>
													<span class="hotelBookingTaxPrice">Rp 0</span>
												</strong>
											</td>
										</tr>
										<tr>
											<td>Traveloka Fee</td>
											<td class="hotelBookingRightContent"><strong>GRATIS</strong></td>
										</tr>
									</tbody></table>
									<table class="bookingTotalPrice">
										<tbody><tr>
											<td>Total</td>
											<td class="hotelBookingRightContent"><strong><div class="tv-pull-right totalPrice">Rp 141.208</div></strong></td>
										</tr>
									</tbody></table>
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