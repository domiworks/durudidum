<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('CitiesTableSeeder');
        $this->call('AirportTableSeeder');
        $this->call('EventTableSeeder');

        $this->command->info('table seeded!');
    }

}

	class CitiesTableSeeder extends Seeder 
	{

		public function run()
		{
			DB::table('cities')->delete();
			City::create(array('nama_kota' => 'Bandung', 'nama_area' => '-'));
			City::create(array('nama_kota' => 'Bandung', 'nama_area' => 'Sukajadi'));
			City::create(array('nama_kota' => 'Bandung', 'nama_area' => 'Bandung Wetan'));
			City::create(array('nama_kota' => 'Bandung', 'nama_area' => 'Cihampelas'));
			City::create(array('nama_kota' => 'Bandung', 'nama_area' => 'Sukasari'));
			City::create(array('nama_kota' => 'Bandung', 'nama_area' => 'Astana Anyar'));
			City::create(array('nama_kota' => 'Bali', 'nama_area' => '-'));
			City::create(array('nama_kota' => 'Bali', 'nama_area' => 'Kuta'));
			City::create(array('nama_kota' => 'Bali', 'nama_area' => 'Ubud'));
			City::create(array('nama_kota' => 'Jakarta', 'nama_area' => '-'));
			City::create(array('nama_kota' => 'Jakarta', 'nama_area' => 'Menteng'));
			
		}
	}
	
	class AirportTableSeeder extends Seeder 
	{

		public function run()
		{
			DB::table('airports')->delete();
			Airport::create(array('kode_bandara' => 'CGK', 'nama_bandara' => 'Bandar Udara Internasional Soekarno-Hatta', 'id_kota'=>'10'));
			Airport::create(array('kode_bandara' => 'HLP', 'nama_bandara' => 'Bandar Udara Halim Perdanakusuma', 'id_kota'=> '10'));
			Airport::create(array('kode_bandara' => 'BDO', 'nama_bandara' => 'Bandar Udara Internasional Husein Sastranegara', 'id_kota'=> '1'));
			Airport::create(array('kode_bandara' => 'DPS', 'nama_bandara' => 'Bandar Udara Internasional Ngurah Rai', 'id_kota'=> '7'));
			
		}
	}
	
	class EventTableSeeder extends Seeder 
	{

		public function run()
		{
			DB::table('events')->delete();
			WanderEvent::create(array('nama_event' => 'Color Run', 'id_area' => '8', 'posted_by'=>'bewnico123','tanggal_event'=>'2014-11-30','deskripsi'=>'event description here'));
			WanderEvent::create(array('nama_event' => 'Jazz Fest', 'id_area' => '8', 'posted_by'=>'gentry_swanri','tanggal_event'=>'2014-11-29','deskripsi'=>'event description here'));			
		}
	}
	
	class FlightTableSeeder extends Seeder 
	{

		public function run()
		{
			DB::table('flights')->delete();
			// Flight::create(array('nama_event' => 'Color Run', 'id_area' => '8', 'posted_by'=>'bewnico123','tanggal_event'=>'2014-11-30','deskripsi'=>'event description here'));		
			
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-01',
				'tanggal_tiba' => '2014-12-01' ,
				'jam_berangkat' => '07:00:00',
				'jam_tiba' => '09:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '400000',
				'sisa_kursi' => '5',
				'id_bandara_berangkat' => 13, //14
				'id_bandara_sampai' => 16
			));			
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-02',
				'tanggal_tiba' => '2014-12-02' ,
				'jam_berangkat' => '09:00:00',
				'jam_tiba' => '11:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '420000',
				'sisa_kursi' => '7',
				'id_bandara_berangkat' => 14, //14
				'id_bandara_sampai' => 16
			));
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-03',
				'tanggal_tiba' => '2014-12-03' ,
				'jam_berangkat' => '11:00:00',
				'jam_tiba' => '13:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '440000',
				'sisa_kursi' => '9',
				'id_bandara_berangkat' => 13, //14
				'id_bandara_sampai' => 16
			));
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-04',
				'tanggal_tiba' => '2014-12-04' ,
				'jam_berangkat' => '13:00:00',
				'jam_tiba' => '15:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '460000',
				'sisa_kursi' => '11',
				'id_bandara_berangkat' => 13, //14
				'id_bandara_sampai' => 16
			));
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-05',
				'tanggal_tiba' => '2014-12-05' ,
				'jam_berangkat' => '15:00:00',
				'jam_tiba' => '17:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '480000',
				'sisa_kursi' => '13',
				'id_bandara_berangkat' => 13, //14
				'id_bandara_sampai' => 16
			));
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-06',
				'tanggal_tiba' => '2014-12-06' ,
				'jam_berangkat' => '17:00:00',
				'jam_tiba' => '19:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '500000',
				'sisa_kursi' => '15',
				'id_bandara_berangkat' => 14, //14
				'id_bandara_sampai' => 16
			));
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-07',
				'tanggal_tiba' => '2014-12-07' ,
				'jam_berangkat' => '19:00:00',
				'jam_tiba' => '21:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '520000',
				'sisa_kursi' => '17',
				'id_bandara_berangkat' => 13, //14
				'id_bandara_sampai' => 16
			));
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-08',
				'tanggal_tiba' => '2014-12-08' ,
				'jam_berangkat' => '21:00:00',
				'jam_tiba' => '23:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '540000',
				'sisa_kursi' => '19',
				'id_bandara_berangkat' => 14, //14
				'id_bandara_sampai' => 16
			));
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-09',
				'tanggal_tiba' => '2014-12-09' ,
				'jam_berangkat' => '09:00:00',
				'jam_tiba' => '11:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '560000',
				'sisa_kursi' => '21',
				'id_bandara_berangkat' => 14, //14
				'id_bandara_sampai' => 16
			));
			Flight::create(array(
				'maskapai' => 'Garuda Indonesia', 
				'logo_maskapai_path' => 'assets/file_upload/maskapai/1/logo_maskapai_1.jpg',
				'tanggal_berangkat' => '2014-12-10',
				'tanggal_tiba' => '2014-12-10' ,
				'jam_berangkat' => '11:00:00',
				'jam_tiba' => '13:00:00',
				'zona_waktu' => 'GMT+7',
				'fasilitas' => 'bagasi 20kg, makanan' ,
				'harga_per_orang' => '580000',
				'sisa_kursi' => '23',
				'id_bandara_berangkat' => 13, //14
				'id_bandara_sampai' => 16
			));
		}
	}
	
	class HotelTableSeeder extends Seeder 
	{

		public function run()
		{
			DB::table('hotels')->delete();
			Hotel::create(
					array(
						'nama' => 'Ibis Bandung Trans Studio',
						'alamat' => 'Jl. Gatot Subroto 289',
						'telepon' => '022 6453859',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail hotel ibis bandung trans studio',
						'keterangan' => 'keterangan hotel ibis bandung trans studio',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 1,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
			Hotel::create(
					array(
						'nama' => 'Favehotel Braga',
						'alamat' => 'Jl. Braga 99',
						'telepon' => '022 8596734',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail favehotel braga',
						'keterangan' => 'keterangan favehotel braga',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 2,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
			Hotel::create(
					array(
						'nama' => 'Favehotel Premier Cihampelas',
						'alamat' => 'Jl. Cihampelas 129',
						'telepon' => '022 9145372',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail favehotel premier cihampelas',
						'keterangan' => 'keterangan favehotel premier cihampelas',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 3,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
			Hotel::create(
					array(
						'nama' => 'GH Universal Hotel',
						'alamat' => 'Jl. Setiabudhi 376',
						'telepon' => '022 4564831',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail GH universal hotel',
						'keterangan' => 'keterangan GH universal hotel',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 4,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
			Hotel::create(
					array(
						'nama' => 'Gino Feruci Braga',
						'alamat' => 'Jl. Braga 67',
						'telepon' => '022 4563892',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail gino feruci braga',
						'keterangan' => 'keterangan gino feruci braga',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 5,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
			Hotel::create(
					array(
						'nama' => 'Zodiak Sutami Hotel',
						'alamat' => 'Jl. Prof. Dr. Ir. Sutami 133',
						'telepon' => '022 8761235',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail zodiak sutami hotel',
						'keterangan' => 'keterangan zodiak sutami hotel',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 6,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
			Hotel::create(
					array(
						'nama' => 'Amaris Hotel Cihampelas',
						'alamat' => 'Jl. Cihampelas 171',
						'telepon' => '022 8574631',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail amaris hotel cihampelas',
						'keterangan' => 'keterangan amaris hotel cihampelas',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 7,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
			Hotel::create(
					array(
						'nama' => 'Arion Swiss-Belhotel',
						'alamat' => 'Jl. Otto Iskandardinata 16',
						'telepon' => '022 9876542',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail arion swiss-belhotel',
						'keterangan' => 'keterangan arion swiss-belhotel',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 8,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
			Hotel::create(
					array(
						'nama' => 'Hotel Santika',
						'alamat' => 'Jl. Sumatera 52',
						'telepon' => '022 4678593',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail hotel santika',
						'keterangan' => 'keterangan hotel santika',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 9,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
			Hotel::create(
					array(
						'nama' => 'Grand Serela Setiabudhi',
						'alamat' => 'Jl. Hegarmanah 9',
						'telepon' => '022 6453859',
						'jumlah_bintang' => 3,
						'waktu_check_in' => '11:00:00',
						'waktu_check_out' => '12:00:00',
						'folder_gallery_path' => '',
						'hotel_detail' => 'detail grand serela setiabudhi',
						'keterangan' => 'keterangan grand serela setiabudhi',
						'kebijakan_pembatalan' => 'Semua pembatalan tidak diterima setelah jatuh tempo.',
						'fasilitas_dasar' => 'makan pagi',
						'fasilitas_lain' => 'tempat fitnes, kolam berenang',
						'id_area' => 10,
						'review_terbaik' => 'Hotel ini memberikan pelayanan yang sangat baik. Saya sangat nyaman tinggal di hotel ini.',
						'maps_path' => ''
					)
			);
		}
	}
	
	class HotelRoomTableSeeder extends Seeder 
	{

		public function run()
		{
			DB::table('hotel_rooms')->delete();
			HotelRoom::create(
					array(
						'tipe_kamar' => 'standard room',
						'kapasitas_kamar' => 2,
						'harga_per_kamar_per_malam' => 800000,
						'sisa_kamar' => 1,
						'id_hotel' => 1
					)
			);
			HotelRoom::create(
					array(
						'tipe_kamar' => 'superior room',
						'kapasitas_kamar' => 2,
						'harga_per_kamar_per_malam' => 850000,
						'sisa_kamar' => 2,
						'id_hotel' => 2
					)
			);
			HotelRoom::create(
					array(
						'tipe_kamar' => 'deluxe room',
						'kapasitas_kamar' => 3,
						'harga_per_kamar_per_malam' => 1400000,
						'sisa_kamar' => 3,
						'id_hotel' => 3
					)
			);
			HotelRoom::create(
					array(
						'tipe_kamar' => 'junior suite room',
						'kapasitas_kamar' => 2,
						'harga_per_kamar_per_malam' => 1200000,
						'sisa_kamar' => 4,
						'id_hotel' => 4
					)
			);
			HotelRoom::create(
					array(
						'tipe_kamar' => 'suite room ',
						'kapasitas_kamar' => 2,
						'harga_per_kamar_per_malam' => 1300000,
						'sisa_kamar' => 5,
						'id_hotel' => 5
					)
			);
			HotelRoom::create(
					array(
						'tipe_kamar' => 'standard room',
						'kapasitas_kamar' => 2,
						'harga_per_kamar_per_malam' => 900000,
						'sisa_kamar' => 6,
						'id_hotel' => 6
					)
			);
			HotelRoom::create(
					array(
						'tipe_kamar' => 'superior room',
						'kapasitas_kamar' => 5,
						'harga_per_kamar_per_malam' => 1700000,
						'sisa_kamar' => 7,
						'id_hotel' => 7
					)
			);
			HotelRoom::create(
					array(
						'tipe_kamar' => 'deluxe room',
						'kapasitas_kamar' => 3,
						'harga_per_kamar_per_malam' => 1500000,
						'sisa_kamar' => 8,
						'id_hotel' => 8
					)
			);
			HotelRoom::create(
					array(
						'tipe_kamar' => 'junior suite room',
						'kapasitas_kamar' => 2,
						'harga_per_kamar_per_malam' => 1800000,
						'sisa_kamar' => 9,
						'id_hotel' => 9
					)
			);
			HotelRoom::create(
					array(
						'tipe_kamar' => 'suite room',
						'kapasitas_kamar' => 2,
						'harga_per_kamar_per_malam' => 2000000,
						'sisa_kamar' => 10,
						'id_hotel' => 10
					)
			);
		}
	}
	
	class HotelReviewTableSeeder extends Seeder 
	{

		public function run()
		{
			DB::table('hotel_reviews')->delete();
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Abrian',
						'rate' => 4,
						'id_hotel' => 1
					)
			);
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Marlina',
						'rate' => 2,
						'id_hotel' => 2
					)
			);
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Maria',
						'rate' => 5,
						'id_hotel' => 3
					)
			);
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Febi',
						'rate' => 3,
						'id_hotel' => 4
					)
			);
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Fabius',
						'rate' => 1,
						'id_hotel' => 5
					)
			);
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Sherly',
						'rate' => 3,
						'id_hotel' => 6
					)
			);
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Susan',
						'rate' => 2,
						'id_hotel' => 7
					)
			);
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Irene',
						'rate' => 5,
						'id_hotel' => 8
					)
			);
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Rudi',
						'rate' => 1,
						'id_hotel' => 9
					)
			);
			HotelReview::create(
					array(
						'review' => 'This hotel have a good service.',
						'review_oleh' => 'Reyhan',
						'rate' => 4,
						'id_hotel' => 10
					)
			);
		}
	}
	
	class HotelOrderTableSeeder extends Seeder
	{
	
		public function run()
		{
			DB::table('hotel_orders')->delete();
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser1',
						'id_user' => 1,
						'id_hotel' => 1,
						'jumlah_kamar' => 2,
						'total_harga' => 1600000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-1',
						'tanggal_keluar' => '2014-12-2'
					)
			);
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser2',
						'id_user' => 2,
						'id_hotel' => 2,
						'jumlah_kamar' => 2,
						'total_harga' => 1700000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-2',
						'tanggal_keluar' => '2014-12-3'
					)
			);
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser3',
						'id_user' => 3,
						'id_hotel' => 3,
						'jumlah_kamar' => 2,
						'total_harga' => 2800000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-3',
						'tanggal_keluar' => '2014-12-4'
					)
			);
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser4',
						'id_user' => 4,
						'id_hotel' => 4,
						'jumlah_kamar' => 2,
						'total_harga' => 2400000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-4',
						'tanggal_keluar' => '2014-12-5'
					)
			);
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser5',
						'id_user' => 5,
						'id_hotel' => 5,
						'jumlah_kamar' => 2,
						'total_harga' => 2600000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-5',
						'tanggal_keluar' => '2014-12-6'
					)
			);
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser6',
						'id_user' => 6,
						'id_hotel' => 6,
						'jumlah_kamar' => 2,
						'total_harga' => 1800000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-6',
						'tanggal_keluar' => '2014-12-7'
					)
			);
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser7',
						'id_user' => 7,
						'id_hotel' => 7,
						'jumlah_kamar' => 2,
						'total_harga' => 3400000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-7',
						'tanggal_keluar' => '2014-12-8'
					)
			);
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser8',
						'id_user' => 8,
						'id_hotel' => 8,
						'jumlah_kamar' => 2,
						'total_harga' => 3000000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-8',
						'tanggal_keluar' => '2014-12-9'
					)
			);
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser9',
						'id_user' => 9,
						'id_hotel' => 9,
						'jumlah_kamar' => 2,
						'total_harga' => 3600000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-9',
						'tanggal_keluar' => '2014-12-10'
					)
			);
			HotelOrder::create(
					array(
						'kode_pemesanan' => 'kodeuser10',
						'id_user' => 10,
						'id_hotel' => 10,
						'jumlah_kamar' => 2,
						'total_harga' => 4000000,
						'catatan_khusus' => 'tidak ada catatan khusus',
						'tanggal_masuk' => '2014-12-10',
						'tanggal_keluar' => '2014-12-11'
					)
			);
		}
	}
