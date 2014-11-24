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

            <h1>Pemesanan</h1>
            <div class="col-md-8" >
			<form>
                <div class="col-md-12" style="border:1px solid;margin-bottom:10px;">
                    <h3>Isi data pemesan yang dapat dihubungi</h3>
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Nama</label>
                        <label  class="col-md-1">:</label>
                        <input class="col-md-5" type="text"   />
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Nomor handphone</label>
                        <label  class="col-md-1">:</label>
                        <input class="col-md-4" type="text"  />
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Alamat email</label>
                        <label  class="col-md-1">:</label>
                        <input class="col-md-5" type="text"  />
                    </div>

                </div>
                <div class="col-md-12" style="border:1px solid;margin-bottom:5px;">
                    <h3>Data Penumpang</h3>

                    <div class="form-group col-md-4">
                        <label class="col-md-3">Titel</label>
                        <label  class="col-md-1">:</label>
                        <input class="col-md-3" type="text"   />
                    </div>
                    <div class="form-group col-md-8">
                        <label class="col-md-5">Nama sesuai KTP/SIM/Passport</label>
                        <label  class="col-md-1">:</label>
                        <input class="col-md-6" type="text"   />
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Bagasi ke <span></span></label>
                        <label  class="col-md-1">:</label>
                        <select class="col-md-5" type="text" value="">
                            <option>torototot</option>
                            <option>torototot</option>
                            <option>torototot</option>
                            <option>torototot</option>
                            <option>torototot</option>
                        </select>
                    </div>
                </div>
			<br>
			<p style="text-align:right;"><input type="submit" class="btn btn-info"   /></p>
			</form>
            </div>




            <div class="col-md-4">
                <div class="col-md-12" style="margin-bottom:10px;">
                    <h3>Rincian Penerbangan</h3>
                    <div class="col-md-12">Penerbangan: <span>Senin, 24 Nov 2014</span></div>
                    <div class="col-md-12">
                        <table>
                            <tr>
                                <td>0</td>
                                <td colspan="3"><span>Jakarta(CKG)</span></td>
                            </tr>
                            <tr>
                                <td>|</td>
                                <td rowspan="2">logo2</td>
                                <td rowspan="2">XX</td>
                                <td>14:45|Senin</td>

                            </tr>
                            <tr>
                                <td>|</td>
                                <td>16:45|Senin</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>0</td>
                                <td colspan="3"><span>Bali / Denpasar (DPS)</span></td>
                            </tr>
                        </table>
                    </div>
                    <p style="color:#aaa;font-size=10px;">Semua waktu adalah waktu lokal bandara</p>
                </div>
                <div class="col-md-12" style="margin-bottom:10px;">
                    <h3>Rincian Penerbangan</h3>
                    <table>
                        <tr>
                            <td>Lion Air (Dewasa) <span class="noPass">x1</span>:</td>
                            <td><strong>Rp</strong></td>
                            <td><strong>525.100</strong></td>
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
                            <td >Rp 525.100</td>
                        </tr>
                    </table>
                    <p>
                        Maskapai tetap dapat meng-update harga.<br>Harga final akan Anda dapatkan di halaman<br>review pembayaran.
                    </p>
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