<?php 
	
	$nilaiUAS = 70;

	echo "Nilai UAS Anda : $nilaiUAS, ";
	if ($nilaiUAS >= 90) {
		echo "Grade = A";
	} elseif ($nilaiUAS >= 80) {
		echo "Grade = B";
	} elseif ($nilaiUAS >= 70) {
		echo "Grade = C";
	} elseif ($nilaiUAS >= 60) {
		echo "Grade = D";
	} else {
		echo "Grade = E";
	}

 ?>