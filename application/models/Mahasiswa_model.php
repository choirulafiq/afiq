<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
	public function get_data()
	{
		$cars = array (
			array("No"=> 1, "NIM"=> 17124000987,"Nama_depan"=> 'Abdillah',"Nama_belakang"=> 'Faqih',"Jenis_kelamin"=> 'Laki-Laki',"Angkatan"=>2017)
			, array("No"=> 2,"NIM"=> 17124000988,"Nama_depan"=> 'Ahmad',"Nama_belakang"=> 'Syarif',"Jenis_kelamin"=>  'Laki-Laki',"Angkatan"=>2017)
			, array("No"=> 3,"NIM"=> 17124000989,"Nama_depan"=> 'Ummi',"Nama_belakang"=> 'Qulsum',"Jenis_kelamin"=> 'Perempuan',"Angkatan"=>2017)
			, array("No"=> 4,"NIM"=> 18124000987,"Nama_depan"=> 'Abduh',"Nama_belakang"=> 'Somat',"Jenis_kelamin"=> 'Laki-Laki',"Angkatan"=>2018)
			, array("No"=> 5,"NIM"=> 18124000988,"Nama_depan"=> 'Sholeh',"Nama_belakang"=> 'Mukarom',"Jenis_kelamin"=> 'Laki-Laki',"Angkatan"=>2018)
			, array("No"=> 6,"NIM"=> 18124000989,"Nama_depan"=> 'Siti',"Nama_belakang"=> 'Qomariah',"Jenis_kelamin"=> 'Perempuan',"Angkatan"=>2018)

		);

		return $cars;
	}
}