<?php 

	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		public function index()
		{
			echo 'Biodata Mahasiswa';
			echo nl2br(" \n
			Nama : Obaja Christison Siadari \n
			NIM  : 19510040 \n
			jurusan   : Sistem informasi \n
			tgl lahir : 9 Mei 2001 \n
			Agama: Kristen \n
			Asal : Batam");
		}
	}
 ?>