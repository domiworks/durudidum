@extends('layouts.front_end.book_layout')
@section('content')



    <div class="container">
        <div class="row-fluid" style="padding-top:20px;">

            timeline
        </div>

    </div>
    <div class="container">
        <div class="row-fluid" style="padding-top:20px;">

            <h1>Pemesanan Hotel</h1>
            <div class="col-md-8" >

                <form>
                    <div class="col-md-12" style="border:1px solid;margin-bottom:10px;">
                        <h3>Data pemesan</h3>
                        <div class="form-group col-md-12">
                            <label class="col-md-3">Nama</label>
                            <label  class="col-md-1">:</label>
                            <input class="col-md-5" type="text"   />
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-3">Nomor telepon</label>
                            <label  class="col-md-1">:</label>
                            <input class="col-md-4" type="text"  />
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-3">Alamat email</label>
                            <label  class="col-md-1">:</label>
                            <input class="col-md-5" type="text"  />
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-3">Nama Lengkap Tamu</label>
                            <label  class="col-md-1">:</label>
                            <input class="col-md-5" type="text"  />
                            <div class="checkbox col-md-3">
                                <label>
                                    <input type="checkbox"> Sama dengan pemesan
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12" style="border:1px solid;margin-bottom:5px;">
                        <h3>Permintaan khusus (opsional)</h3>
                        <textarea class="col-md-12" rows="5"></textarea>
                        <div>
                            <p>Catatan: Permintaan spesifik bergantung pada ketersediaan setiap hotel dan tidak dapat dijamin. Check-in awal atau Transfer Bandara dapat menimbulkan biaya ekstra. Silakan hubungi pihak hotel untuk memastikan.</p>
                        </div>

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
                                <p style="text-align:right;"><input type="submit" class="btn btn-info"   /></p>
                            </div>
                        </div>


                    </div>
                </form>
            </div>




            <div class="col-md-4">
                <div class="col-md-12" style="margin-bottom:10px;">
                    <div class="tv-bg-gray tvHotelBookingDetail">
                        <h2>Rincian Pemesanan</h2>
                        <div class="clearfix tvHotelBookingImageName">
                            <div class="bookedHotelImage" load-src="https://images.travelnow.com/hotels/7000000/6490000/6485600/6485514/6485514_5_t.jpg" style="width: 70px; height: 70px; position: relative; overflow: hidden; background-color: rgb(67, 67, 67);"><img class="tv-loading-sign" src="https://asset.traveloka.com/assets/images/misc/loading3-300001.gif" style="width: 18px; height: 18px; position: absolute; left: 26px; top: 26px; max-width: none;"><img src="https://images.travelnow.com/hotels/7000000/6490000/6485600/6485514/6485514_5_t.jpg" style="position: absolute; left: 0px; top: 0px; width: 70px; height: 70px; max-width: none; background-color: rgb(0, 0, 0);"><img src="https://images.travelnow.com/hotels/7000000/6490000/6485600/6485514/6485514_5_t.jpg" style="position: absolute; left: 0px; top: 0px; width: 70px; height: 70px; max-width: none; background-color: rgb(0, 0, 0);"></div>
                            <div class="hotelName" style="width: 200px; float: left;">
                                <h3>
                                    <span class="hotelNameDisplay">Tresor Tavern</span>
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


    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>

@stop