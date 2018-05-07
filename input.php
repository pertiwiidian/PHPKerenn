<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2> Table Inputan </h2>
	masukkan nim mahasiswa <input type="text" name="nim"><br><br>
	masukkan nama mahasiswa <input type="text" name="nama"><br>
	<input type="submit" name="nama"><br>
	
		
		<?php 
		include 'koneksi3.php';
		$a = mysqli_query($k3, "select * from mahasiswa");
		while ($data = mysqli_fetch_array($a))
				
		 ?>
		 
</body>
</html>