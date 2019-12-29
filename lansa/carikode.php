<?php 
// mengaktifkan session pada php
session_start();
 if($_SESSION['id_user']==""){
	 header("location:index.php?pesan=gagal");
 }
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login 
$kode = $_POST['kode_payment']; 
// menyeleksi data user dengan username dan password yang sesuai
$cetak = mysqli_query($conn,"SELECT * FROM payment WHERE kode_payment='$kode'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($cetak);
 
// cek apakah username dan password di temukan pada database
if($cek > 0)
{
	$data = mysqli_fetch_assoc($cetak);
	// cek jika user login sebagai admin
	if($data['status_bayar']=="Sudah"){
		// buat session login dan username
		$_SESSION['id_payment'] = $data['id_payment'];
		$_SESSION['status_bayar'] = "Sudah";
		$_SESSION['kode_payment'] = $kode;
		$_SESSION['id_pesanan'] = $data['id_pesanan'];
		// alihkan ke halaman dashboard admin
		header("location:tiket1.php");


		exit;
	// cek jika user login sebagai pengguna
	}else{
		// alihkan ke halaman login kembali
		header("location:nyari.php?belumkonfirmasi");
	}	
}
?>