<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2> Table Mahasiswa </h2>
	
	<table height ="50" border="2" width="30%" style='text-align: center'>
		<tr>
			<th>nim</th>
			<th>nama</th>
		</tr>
		<?php 
		include 'koneksi3.php';
		$a = mysqli_query($k3, "select * from mahasiswa");
		while ($data = mysqli_fetch_array($a))
				{
					echo 
						"<tr>
							<td>$data[nim]</td>
							<td>$data[nama]</td>
						
							
						</tr>";

				}
		 ?>
		 
</body>
</html>