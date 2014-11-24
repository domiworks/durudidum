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

            <h1>Pembayaran</h1>
            <div class="alert alert-success" role="alert">Mohon selesaikan pembayaran untuk menghindari pembatalan oleh maskapai.</div>
            <div class="col-md-8" >
                <div class="row">
                    <h3>Pilihlah Metode Pembayaran:</h3>
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