<html>
<head>
	<title></title>
</head>
<body>
	<h1>Bukti Pembayaran</h1>
	<br><br>
	<table border="1" width="100%">
	<tr>
		<th>Foto</th>
		<th>Nama</th>
		<th>Telepon</th>
		<th>Alamat </th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM bukti"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
		
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['telp']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>