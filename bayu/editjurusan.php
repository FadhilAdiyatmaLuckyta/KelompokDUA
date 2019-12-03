<!DOCTYPE html>
<html>
<head>
	<title>Mengedit Jurusan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>
	
	<a href="formtambahjurusan.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "config.php";
	$id_jurusan = $_GET['id_jurusan'];
	$query_mysql = mysql_query("SELECT * FROM tb_jurusan WHERE id_jurusan='$id_jurusan'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="updatejurusan.php" method="post">		
		<table>
			<tr>
				<td>ID Jurusan</td>
				<td>
					<input type="hidden" name="id_jurusan" value="<?php echo $data['id_jurusan'] ?>">
					<input type="text" name="id_jurusan" value="<?php echo $data['id_jurusan'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="Jurusan" value="<?php echo $data['Jurusan'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jam</td>
				<td><input type="text" name="jam" value="<?php echo $data['jam'] ?>"></td>					
            </tr>
            <tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>