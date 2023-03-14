<?php

    if(isset($_POST['luasSegitiga'])){
        if(!empty($_POST['luasSegitiga'])) {
            $alas = $_POST["alas"];
            $tinggi = $_POST["tinggi"];
            $alasSegitiga = $alas;
            $tinggiSegitiga = $tinggi;
            $HluasSegitiga = 0.5 * $alasSegitiga * $tinggiSegitiga;
            echo '<b><u>Hasil Luas Segitiga:</u></b> <br><br>';
            echo 'Alas Segitiga : '.$alasSegitiga.' cm<br>';
            echo 'Tinggi Segitiga : '.$tinggiSegitiga.' cm<br><br>';
            echo '<b>Luas Segitiganya Adalah '.$HluasSegitiga.' cm</b>';

            $file = "databaseSegTig.json";
            $tugas = file_get_contents($file);
            $dataSeg = json_decode($tugas, true);
            $dataSeg[] = array(
                'Pilihan Perhitungan Luas Bangun Datar' => "Luas Segitiga",
                'Alas' => "$alasSegitiga",
                'Tinggi' => "$tinggiSegitiga",
                'Luas Total Segitiga' => "$HluasSegitiga",
            );
            $tupdat = json_encode($dataSeg, JSON_PRETTY_PRINT);
            file_put_contents($file, $tupdat);

            echo "<br><br>==============================";
            echo "<br><br> <b><u>Histori Perhitungan Luas Segitiga : </u></b> <br><br>";

            foreach ($dataSeg as $baca) {
                echo "============================== <br>";
                echo "Alas Segitiga : ". $baca['Alas']. " cm<br>";
                echo "Tinggi Segitiga : ". $baca['Tinggi']. " cm<br>";
                echo "Luas Segitiga : ". $baca['Luas Total Segitiga']. " cm<br>";
                echo "============================== <br><br>";
            }
        }
    }
    elseif(isset($_POST['luasPersegi'])){
        if(!empty($_POST['luasPersegi'])) {
            $sisi = $_POST["sisi"];
            $sisiPersegi = $sisi;
            $HluasPersegi = pow($sisiPersegi, 2);
            echo '<b><u>Hasil Luas Persegi:</u></b> <br><br>';
            echo 'Sisi Persegi: '.$sisiPersegi.' cm<br><br>';
            echo '<b>Luas Perseginya Adalah '.$HluasPersegi.' cm</b>';

            $file = "databasePer.json";
            $tugas = file_get_contents($file);
            $dataPer = json_decode($tugas, true);
            $dataPer[] = array(
                'Pilihan Perhitungan Luas Bangun Datar' => "Luas Persegi",
                'Sisi' => "$sisiPersegi",
                'Luas Total Persegi' => "$HluasPersegi",
            );
            $tupdat = json_encode($dataPer, JSON_PRETTY_PRINT);
            file_put_contents($file, $tupdat);

            echo "<br><br>==============================";
            echo "<br><br> <b><u>Histori Perhitungan Luas Persegi : </u></b> <br><br>";

            foreach ($dataPer as $baca) {
                echo "============================== <br>";
                echo "Sisi Persegi : ". $baca['Sisi']. " cm<br>";
                echo "Luas Persegi : ". $baca['Luas Total Persegi']. " cm<br>";
                echo "============================== <br><br>";
            }
        }
    }
    elseif(isset($_POST['luasLingkaran'])){
        if(!empty($_POST['luasLingkaran'])) {
            $jari = $_POST["jari"];
            $jariLingkaran = $jari;
            $HluasLingkaran = pi() * pow($jariLingkaran, 2);
            echo '<b><u>Hasil Luas Lingkaran:</u></b> <br><br>';
            echo 'Jari-Jari Lingkaran: '.$jariLingkaran.' cm<br><br>';
            echo '<b>Luas Lingkaran Adalah '.$HluasLingkaran.' cm</b>';

            $file = "databaseLing.json";
            $tugas = file_get_contents($file);
            $dataLing = json_decode($tugas, true);
            $dataLing[] = array(
                'Pilihan Perhitungan Luas Bangun Datar' => "Luas Lingkaran",
                'Phi' => "3.14",
                'Jari-jari' => "$jariLingkaran",
                'Luas Total Lingkaran' => "$HluasLingkaran",
            );
            $tupdat = json_encode($dataLing, JSON_PRETTY_PRINT);
            file_put_contents($file, $tupdat);

            echo "<br><br>==============================";
            echo "<br><br> <b><u>Histori Perhitungan Luas Lingkaran : </u></b> <br><br>";

            foreach ($dataLing as $baca) {
                echo "============================== <br>";
                echo "Phi Lingkaran : 3.14 <br>";
                echo "Jari-jari Lingkaran : ". $baca['Jari-jari']. " cm<br>";
                echo "Luas Lingkaran : ". $baca['Luas Total Lingkaran']. " cm<br>";
                echo "============================== <br><br>";
            }
        }
    }

?>

<form action="TugasMuhammadRidwan_layerUtama.php" method="post">
    <br>
    <input type="submit" name="kembali" value="kembali">
</form>