<?php 

	error_reporting(0);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pemesanan Laundry</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<?php 

	$pilKot = array("Bekasi", "Jakarta", "Bandung", "Yogyakarta", "Surabaya", "Bali");
	sort($pilKot);

 	?>
	<form action="" method="post">
		
		<h1>Form Pemesanan Laundry</h1>
		<img src="laundry.jfif">
		<br>
		<table>
			<tr>
				<td>Pilih Cabang : </td>
				<td>
				<select name="pilKot">
					<option>Cabang : </option>
					<?php 

					foreach ($pilKot as $val) {
						echo "<option value='". $val ."'>" . $val . "</option>";
					}

					 ?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Nama Pelanggan : </td>
				<td><input type="text" name="nampel"></td>
			</tr>
			<tr>
				<td>No Hp : </td>
				<td><input type="text" name="hp"><br></td>
			</tr>
			<tr>
				<td>Total Pakaian (Kg) : </td>
				<td><input type="text" name="kg"><br></td>
			</tr>
		</table>

		<br>

		<input type="submit" name="btn_pesan" class="btn btn-primary" value="Pesan">
		<input type="reset" name="btn_reset" class="btn btn-danger"><br><br>

	</form>
	<?php 

		if ( isset($_POST['btn_pesan'])) {
	    $pilCab = $_POST["pilKot"];
	    $namPel = $_POST["nampel"];
	    $noHp = $_POST["hp"];
	    $jmlPak = $_POST["kg"];
	    $tagAwal = 5000 * $jmlPak;

	    if ( $tagAwal >= 100000) {
	        $disc = 5 / 100 * $tagAwal;
	    }

	    $file = "dbase.json";
	    $initFile = file_get_contents($file);
	    $data = json_decode($initFile, true);

	    $data[] = array (
	        'CabangDipilih' => $pilCab,
	        'NamaPelanggan' => $namPel,
	        'NoHp' => $noHp,
	        'JumlahPakaian' => $jmlPak,
	        'TagihanAwal' => $tagAwal,
	        'Diskon' => $disc
	    );

	    $content = json_encode($data, JSON_PRETTY_PRINT);
	    file_put_contents($file, $content);
	?>

	<?php 

		foreach( $data as $key => $val ) { 

	?>

	<p>===========================================</p>
	<table>
		<tr>
			<td>Cabang yang Dipilih :</td>
			<td><?php echo $val['CabangDipilih']; ?></td>
		</tr>
		<tr>
			<td>Nama Pelanggan : </td>
			<td><?php echo $val['NamaPelanggan']; ?></td>
		</tr>
		<tr>
			<td>No Hp : </td>
			<td><?php echo $val['NoHp']; ?></td>
		</tr>
		<tr>
			<td>Jumlah Pakaian (Kg) : </td>
			<td><?php echo $val['JumlahPakaian']; ?></td>
		</tr>
		<tr>
			<td>Tagihan Awal : </td>
			<td><?php echo $val['TagihanAwal']; ?></td>
		</tr>
		<tr>
			<td>Diskon : </td>
			<td><?php echo $val['Diskon']; ?></td>
		</tr>
		<tr>
			<td>Tagihan Akhir : </td>
			<td><?php echo $val['TagihanAwal'] - $val['Diskon']; ?></td>
		</tr>
	</table>
	<p><br>===========================================</p>	

	<?php } ?>
	<?php } ?>
</body>
</html>
