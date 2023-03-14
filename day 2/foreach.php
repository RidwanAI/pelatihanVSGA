<?php 

	echo "=== ARRAY SATU DIMENSI === <br>";
	$ilhamGod = ["windah","ilham","kocak gemink","bocil ngeyel"];

	foreach ($ilhamGod as $value) {
		echo $value ."<br>";
	}
	echo "<br>";

	echo "=== ARRAY ASOSIATIF === <br>";
	$ilhamGod = ["Nama" => "kocak gemink", "NPM" => 1234, "Jurusan" => "Teknik Mesin"];

	foreach ($ilhamGod as $key => $value) {
		echo $key . " : " .$value . "<br>";
	}
	echo "<br>";

	echo "=== ASOSIATIF MULTIDIMENSI === <br>";
	$ilhamGod = ["Mahasiswa 1" => ["Nama" => "Ridwan", "NPM" => 1234, "Jurusan" => "Teknik Mesin"], 
	"Mahasiswa 2" => ["Nama" => "Fitri", "NPM" => 1234, "Jurusan" => "Teknik Informatika"],
	"Mahasiswa 3" => ["Nama" => "Lussy", "NPM" => 1234, "Jurusan" => "Teknik Industri"]];

	foreach ($ilhamGod as $key => $value) {
		echo $key . "<br> Nama : ". $value["Nama"] . "<br> NPM : ". $value["NPM"] . "<br> Jurusan : " . $value["Jurusan"] . "<br> <br>";
	}

 ?>