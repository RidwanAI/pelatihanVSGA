<?php 

	echo "===== CETAK BILANGAN GANJIL GENAP 1-100 ===== <br>";

	//kita akan membuat perulangan for yang digunakan untuk membuat perulangannya dari 1-100
	for ($angka = 1; $angka <= 100; $angka++) { 
		
		//kemudian kita akan menentukan angka ganjil dan genapnya dengan menggunakan percabangan if-else dan operator modulus.
		if ($angka % 2) {	
			echo "$angka ini angka Ganjil. <br>";
		} else {
			echo "$angka ini angka Genap. <br>";
		}
	}

 ?>