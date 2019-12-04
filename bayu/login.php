<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);
$id_user = $_POST['id_user'];
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0)
{
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['id_user'] = $userlogin;
		// alihkan ke halaman dashboard admin
		header("location:halamanadmin.html");
		exit;
 
	// cek jika user login sebagai pengguna
	}else if($data['level']=="pengguna"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengguna";
		$_SESSION['id_user'] = $userlogin;
		// alihkan ke halaman dashboard pengguna
		header("location:index2.php");
		exit;

		

	// cek jika user login sebagai pengurus
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login2.php?login_error");
	}	
}else{
	header("location:login2.php?login_error");
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css_login.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	
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
	<form action="" method="post" >
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