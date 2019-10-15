<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="css_login.css">
</head>
<body>
	
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! Username atau Password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman Admin";
		}
	}
	?>
	<br/>
	<br/>
	<div class ="kotaklogin">
	<p class="tulisan_login">Silahkan login Admin</p>
	<form method="post" action="cek_loginnyaadmin.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="email" class="form_login" placeholder="Masukkan Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" class="form_login" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" class="tombol_login" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>