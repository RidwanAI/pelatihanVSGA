<?php 

	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];

	$hasil = $angka1 + $angka2;

	if ($hasil == True) {
		echo $hasil."<br>";
		echo "hasilnya benar";
	} else {
		echo "hasilnya salah";
	}

 ?>