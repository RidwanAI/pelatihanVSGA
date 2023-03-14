<?php 

$sisi = 5.5;
$alas = 10.2;
$tinggi = 12.5;
$jari = 5.1;

//Luas Segitiga
$luasSegitiga = 0.5 * $alas * $tinggi;

//Luas Persegi
$luasPersegi = $sisi * $sisi;

//Luas Lingkaran
$luasLingkaran =  pi() * pow($jari, 2);

//tampilan
echo "Luas Segitiga = {$luasSegitiga} <br>";
echo "Luas Persegi = {$luasPersegi} <br>";
echo "Luas Lingkaran = {$luasLingkaran} <br>";
 ?>