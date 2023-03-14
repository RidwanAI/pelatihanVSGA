<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan Get</title>
</head>
<body>
	<form action="#" method="GET">
		Nama : <input type="text" name="tnama"> <br>
		Umur : <input type="text" name="tUmur">

		<input type="submit" name="box" value="ok">
	</form>
	<?php 
	if (isset($_GET['box'])) {
		echo $_GET['tnama']."<br>";
		echo $_GET['tUmur'];
	}
	 ?>
</body>
</html>