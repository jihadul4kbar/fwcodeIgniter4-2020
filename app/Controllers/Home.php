<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	function selamatdatang(){
		echo "<h1>Selamat Datang <h1> ";
	}

	function aritmatika(){
		$data1 = 5;
		$data2 = 10;

		echo "Penjumlahan ", $data1+$data2, "<br>";
		echo "Pengurangan ", $data1-$data2, "<br>";
	}

	function perulangan(){
		for($i=0; $i < 10;  $i++){
			echo " ulang lagi <br> ";
		}
	}

}
