

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
	<form action="login_cek.php" method="post" >
	<?php 
			if(isset($_GET["login_error"])){ ?>
			<h5 style="color: #FF3333; text-align: center; font-family:Aller;"" class="animated shake">Maaf Password atau username salah</h5>
			<?php }	?>
		<table>
			<tr>
				<tr><p style="font-family:Arial Narrow">USERNAME</p></tr>
				
				<tr><input type="text" name="username"  class="form_login" placeholder="Masukkan Username" autocomplete="off" required></tr>
			</tr>
			<tr>
				<tr><p style="font-family:Arial Narrow">PASSWORD</p></tr>
			
				<tr><input type="password" name="password" class="form_login" placeholder="Masukkan password" required></tr>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<tr><input type="submit" class="tombol_login" name="login" value="Login"></tr>
				<tr><p style="font-family:Calibri">Belum memiliki akun? <a style="font-family:Calibri" href="daftar.php">Daftar</a></p></tr>
			</tr>
		</table>
		<br>	
		<!--<center><a href="tambahusers.php">Daftar</a></center>-->

	</form>
	</div>	
</body>
</html>