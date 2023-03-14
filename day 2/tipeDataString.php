<?php
$namaDepan = "Muhammad";
$namaBelakang = "Ridwan";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan.''.$namaBelakang;
echo 'Nama Depan: ' .$namaDepan. '<br>';
echo 'Nama Belakang: ' .$namaBelakang. '<br>';
echo $namaLengkap. "<br>";
echo $namaLengkap2;
?>