@extends('layouts.front_end.book_layout')
@section('content')


<section>
	<div class="container">
		<div class="row-fluid" style="padding-top:20px;">

			timeline
		</div>

	</div>
	<div class="container">
		<div class="row-fluid" style="padding-top:20px;">


			<div class="alert alert-success" role="alert">Harga telah dikonfirmasi. Periksa kembali pemesanan Anda lalu tekan tombol Lanjut ke Pembayaran</div>
			<div class="col-md-8" >
				<h1>Review Pemesanan</h1>
				<div class="row">
					<h3>Rincian Penerbangan</h3>
					<div class="col-md-12" style="margin-bottom:5px;">Penerbangan: <span>Senin, 24 Nov 2014</span></div>

					<div class="col-md-12">
						<table style="border-left:3px solid;">
							<tr>

								<td colspan="3"><span>Jakarta(CKG)</span></td>
							</tr>
							<tr>

								<td rowspan="2">logo2</td>
								<td rowspan="2">XX</td>
								<td>14:45|Senin</td>

							</tr>
							<tr>

								<td>16:45|Senin</td>
							</tr>
						</table>
						<table style="border-left:3px solid;">
							<tr>

								<td colspan="3"><span>Bali / Denpasar (DPS)</span></td>
							</tr>
						</table>
					</div>
					<p style="color:#aaa;font-size=10px;">Semua waktu adalah waktu lokal bandara</p>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h3>Rincian Penerbangan</h3>
						<table>
							<tr>
								<td>Lion Air (Dewasa) <span class="noPass">x1</span>:</td>
								<td><strong>Rp</strong></td>
								<td><strong>525.100</strong></td>
							</tr>
							<tr >
								<td>Harga Bagasi:</td>
								<td><strong>Rp</strong></td>
								<td>0</td>
							</tr>
							<tr>
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
								<td >Rp 525.100</td>
							</tr>
						</table>
						<p>
							Maskapai tetap dapat meng-update harga.<br>Harga final akan Anda dapatkan di halaman<br>review pembayaran.
						</p>
					</div>
					<div class="col-md-6">

						<h3>Daftar Penumpang</h3>

						<div>
							<div >
								<div >

									<table>
										<tbody><tr>
											<td class="numbering"><b>1</b></td>
											<td colspan="2">Tuan</td>
										</tr>
										<tr>
											<td></td>
											<td class="fullName" colspan="2<b">asdasdas</td>
										</tr>
										<tr>
											<td></td>
											<td colspan="2" class="ticketType">Dewasa</td>
										</tr>
										<tr>
											<td></td>
											<td><span>Bagasi ke Bali</span>
												<span class="baggageWeight">15 kg</span></td>
											</tr>
											<tr><td><br></td></tr>
										</tbody></table>


									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="row">
						<div id="hotelBookingDetailSummary" class="clearfix">
							<div class="imageContainer">
								<img src="https://images.travelnow.com/hotels/7000000/6490000/6485600/6485514/6485514_5_t.jpg" class="bookedHotelImageDirect" width="100" height="100">
							</div>
							<div class="contentContainer">
								<h3>
									<span class="hotelNameDisplay">Tresor Tavern</span>
									<span class="hotelStarRating"></span>
								</h3>
								<div class="hotelRefundableDisplay clearfix" style="display: none;">
									<span class="canRefund">Refundable</span>
									<span class="cannotRefund">Non-refundable</span>
								</div>
								<div class="hotelAmenitiesDisplay clearfix">
									<div class="breakfastIncluded">
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
								<table>
									<tbody><tr class="checkIn">
										<th>Check-in:</th>
										<td class="checkInDate">Jum, 27 Mar 2015</td>
									</tr>
									<tr class="checkOut">
										<th>Check-out</th>
										<td class="checkOutDate">Sab, 28 Mar 2015</td>
									</tr>
									<tr class="duration">
										<th>Durasi:</th>
										<td><span class="durationNightDisplay">1</span> malam</td>
									</tr>
									<tr class="guests">
										<th>Tamu:</th>
										<td class="guestsList">hahaha</td>
									</tr>
								</tbody></table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div id="hotelReviewRoomDetail">
								<h3>Detail Kamar</h3>
								<div class="roomDetail">
									<h4 class="roomName">BED IN SHARED ROOM LARGE SIZE DORMITORY SINGLE</h4>
									<div class="roomBookingInfo">Jumlah: <strong><span class="hotelBookingNumberOfRooms">1</span> kamar</strong></div>
									<div class="roomBookingInfo">Tamu per kamar: <strong><span class="numberOfGuest">1</span> orang</strong></div>
								</div>
								<div class="roomSpecialRequest">
									<h4>Permintaan Khusus (jika ada)</h4>
									<div class="hotelSpecialRequestList clearfix"><ul><li><span class="specialRequest">Tanpa permintaan khusus</span><br></li></ul></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div id="reviewBookingFooter" class="clearfix">
							<div class="extraInfo">
								<h4>Instruksi Check-In</h4>
								<p id="hotelCheckInNotes">Biaya penambahan orang dalam kamar mungkin berlaku dan berbeda-beda menurut kebijakan hotel. <br>Sewaktu check-in diperlukan tanda pengenal dengan foto yang resmi dikeluarkan oleh pemerintah dan kartu kredit atau deposit tunai untuk menutup biaya tak terduga. <br>Pemenuhan permintaan khusus bergantung pada ketersediaan sewaktu check-in dan mungkin menimbulkan biaya tambahan. Permintaan khusus tidak dijamin akan terpenuhi. </p><ul><li>Tidak tersedia parkir di lokasi. </li></ul><p></p>
							</div>
							<div class="extraInfo">
								<h4>Keterangan</h4>
								<p id="hotelInventoryMessage">Free Wifi//Large Dormitory consist of 22 beds in shared dormitory room. </p>
							</div>
							<div class="extraInfo">
								<h4>Kebijakan Pembatalan</h4>
								<p>Gratis biaya pembatalan sampai 25 Mar 2015 23:59 waktu hotel setempat.</p>
							</div>
							<div id="reviewBookingFooterButtonContainer" class="clearfix">
								<div class="confirmationText">Dengan mengklik tombol di bawah, Anda 
									menyetujui Syarat dan Ketentuan serta 
									Kebijakan Privasi dari Traveloka.com</div>
									<div class="confirmationButton">
										<button class="btn btn-danger" id="goToPayment">Lanjut ke Pembayaran</button>
									</div>
								</div>
							</div>

						</div>
					</div>




					<div class="col-md-4">

						<div id="right-review">
							<div class="clearfix paymentGreyContainer">
								<div class="paymentText">No. Pesanan</div>
								<div class="paymentBookingId">35229138</div>
							</div>
							<div id="review_submit_right" class="paymentSubmitItem">
								<h2>Lanjut ke Pembayaran</h2>
								<div class="termsAgreeText">
									Dengan mengklik tombol di bawah, Anda menyetujui
									<a target="_blank" href="#">Syarat &amp; Ketentuan</a> dan <br>
									<a target="_blank" href="#">Kebijakan Privasi</a> Traveloka.com
								</div>
								<button class="btn btn-danger" id="goToPayment">Lanjut ke Pembayaran</button>
							</div>
						</div>



						<div id="right-review">


							<div class="tv-bg-gray clearfix tvHotelBookingPrice">
								<h2>Rincian harga</h2>
								<table>
									<tbody><tr>
										<td>
											<p>Harga Kamar (x<span class="hotelBookingNumberOfRooms">1</span>)</p>
											<p><span class="priceDetail">(Detail</span></p>
										</td>
										<td class="hotelBookingRightContent">
											<strong>
												<span class="hotelBookingPrice">Rp 141.208</span>
											</strong>
										</td>
									</tr>
									<tr class="hotelBookingDetailedRoomDisplay" style="display: none;">
										<td colspan="2">
											<table class="hotelBookingDetailedRoomDisplayBreakdown">
												<tbody>
													<tr>
														<td class="roomIndex" data-index="0">Kamar 1</td>
														<td class="roomPriceTotal"></td>
													</tr>
												</tbody>
											</table>
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
									<tbody>
										<tr>
											<td>Total</td>
											<td class="hotelBookingRightContent"><strong>
												<div class="tv-pull-right totalPrice">Rp 141.208</div></strong>
											</td>
										</tr>
									</tbody>
								</table>
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