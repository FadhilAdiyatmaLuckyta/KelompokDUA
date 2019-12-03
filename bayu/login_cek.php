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
		$_SESSION['id_user'] = $data['id_user'];
		
		// alihkan ke halaman dashboard admin
		header("location:halamanadmin.html");
		exit;
 
	// cek jika user login sebagai pengguna
	}else if($data['level']=="pengguna"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengguna";
		$_SESSION['id_user'] = $data['id_user'];

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