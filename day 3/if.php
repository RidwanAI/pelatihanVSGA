<?php

// Tangkap variabel dari form
$tangka = $_POST["tangka"];

//Tampilkan datanya
echo "Input Angka      : $tangka <br>";


if ($tangka > 0)
echo "Bilangan Positif";
elseif ($tangka == 0)
echo "sama dengan nol";
else
echo "Bilangan Negatif";

?>