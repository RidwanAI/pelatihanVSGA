<?php 
	
	$pilihanLuas = $_POST['pilihanLuas'];
	$luasBangdat = $_POST['luasBangdat'];

	if (isset($pilihanLuas)) {
		if (!empty($luasBangdat)) {
			$pilihanUser = $luasBangdat;
			switch ($pilihanUser) {
				case 'Luas Segitiga':
					echo "<b>Luas Segitiga</b>";
                    echo'
                    <form action="TugasMuhammadRidwan_layerKetiga.php" method="post">
                        <br>
                        *Requirement<br>
                        Masukkan Alas Segitiga :
                            <input type="number" name="alas" required> cm<br>
                        Masukkan Tinggi Segitiga :
                            <input type="number" name="tinggi" required> cm<br>
                            <br>
                        <input type="submit" name="luasSegitiga" value="Hitung">    
                    </form>';
					break;
				case 'Luas Persegi':
					echo "<b>Luas Persegi</b>";
                    echo'
                    <form action="TugasMuhammadRidwan_layerKetiga.php" method="post">
                        <br>
                        *Requirement<br>
                        Masukkan Sisi Persegi :
                            <input type="number" name="sisi" required> cm<br>
                            <br>
                        <input type="submit" name="luasPersegi" value="Hitung">    
                    </form>';
					break;
				case 'Luas Lingkaran':
					echo "<b>Luas Lingkaran</b>";
                    echo'
                    <form action="TugasMuhammadRidwan_layerKetiga.php" method="post">
                        <br>
                        *Requirement<br>
                        Masukkan Jari-Jari Lingkaran :
                            <input type="number" name="jari" required> cm<br>
                            <br>
                        <input type="submit" name="luasLingkaran" value="Hitung">    
                    </form>';
					break;
				default:
					echo "Dahlah";
					break;
			}
		} else {
			echo 'Dahlah';
		}
	}

 ?>