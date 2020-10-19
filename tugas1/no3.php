<?php
 

	function paragrap(){
		echo "paragrap ditemukan !";

		$i = 3;
		if($i >= 1) {
			cari_kata();
			$i++;
		}
		 else {
		 	echo "Pengulangan Selesai";
		 }
	}

	function cari_kalimat(){
		echo"kami mencari function paragrap <br><br>";

		paragrap();
	}

	function cari_kata(){
		echo "saya mencari function kalimat<br><br>";

		cari_kalimat();
	}


	cari_kata();
?>