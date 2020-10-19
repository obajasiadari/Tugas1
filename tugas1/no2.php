<?php
	function Ulang_Kalimat(){
		echo "Hallo.. nama saya Obaja C S
			Saya adalah mahasiswa prodi sistem informasi
			saya sangat tertarik mempelajari teknik informatika <br>";
	}

	//k adalah berapa kali kita ingin melakukan pengulangan function Ulang_Kalimat()

	$k = 5;
	for($i = 1;$i <= $k;$i++) {
		Ulang_Kalimat();
	}
?>