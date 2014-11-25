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
			Hotel::create(array('nama_event' => 'Color Run', 'id_area' => '8', 'posted_by'=>'bewnico123','tanggal_event'=>'2014-11-30','deskripsi'=>'event description here'));
		}
	}
