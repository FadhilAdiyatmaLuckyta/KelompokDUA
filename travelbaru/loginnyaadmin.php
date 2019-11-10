<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="css_login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
	<h3 class="tulisan_login" style="font-family:Aller;">Login Admin</h3>
	<br>
	<form method="post" action="cek_loginnyaadmin.php">
		<table>
			<tr>
				<tr>Username</tr>
				<tr><input type="text" name="email" class="form_login" placeholder="Masukkan Username"></tr>
			</tr>
			<tr>
				<tr>Password</tr>
				<tr><input type="password" name="password" class="form_login" placeholder="Masukkan password"></tr>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button class="btn btn-success" type="submit" style="font-family:Aller;">Login</button>  </td>
			</tr>
		</table>			
	</form>
	
  </div>
</body>
</html>