<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login
$jemput = $_POST['jemput'];
$id_pesan = $_POST['id_pesan'];

 
// menyeleksi data user dengan id pesan
$vesan = mysqli_query($conn,"SELECT * FROM pesan WHERE id_pesan ='$id_pesan'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($vesan);
 
// cek apakah username dan password di temukan pada database
if($cek > 0)
{
 
	$data = mysqli_fetch_assoc($vesan);
 
	// cek jika user login sebagai admin
	if($data['status_pesan']=="berhasil"){
 
		// buat session login dan username
		
		$_SESSION['id_pesan'] = $data['id_pesan'];
		
		// alihkan ke halaman dashboard admin
		header("location:halamanadmin.html");
		exit;
 
	// cek jika user login sebagai pengguna
	}else if($data['status_pesan']=="berhasil"){
		// buat session login dan username
		$_SESSION['id_pesan'] = $data['id_pesan'];
		

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