<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css_login.css">
</head>
</head>
<body>


	
	<br/>
	<!-- cek pesan notifikasi -->
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! Username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman user";
		}
	}
	?>
	<br/>
	<br/>
	<div class ="kotaklogin">
	<p class="tulisan_login">Silahkan login</p>
	<form method="post" action="login_cek.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"  class="form_login" placeholder="Masukkan Username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" class="form_login" placeholder="Masukkan password" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" class="tombol_login" value="LOGIN"></td>
			</tr>
		</table>
		<br>	
		<center><a href="filetambah.php">Daftar</a></center>

	</form>
	</div>	
</body>
</html>