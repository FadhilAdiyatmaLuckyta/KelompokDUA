<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css_login.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
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
	<h3 class="tulisan_login" style="font-family:Aller;">Silahkan Login</h3>
	<form method="post" action="login_cek.php">
	<?php 
			if(isset($_GET["login_error"])){ ?>
			<h5 style="color: #FF3333; text-align: center; font-family:Aller;"" class="animated shake">Maaf Password atau username salah</h5>
			<?php }	?>
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"  class="form_login" placeholder="Masukkan Username" autocomplete="off" required></td>
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