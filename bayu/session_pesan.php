<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login
	 
    $id_pesanan= $_POST['id_pesanan']; 
// menyeleksi data user dengan username dan password yang sesuai
$cetak = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_pesanan='$id_pesanan' ");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($cetak);
 
// cek apakah username dan password di temukan pada database
if($cek > 0)
{
	$data = mysqli_fetch_assoc($cetak);
	// cek jika user login sebagai admin
	if($data['id_pesanan']=="$id_pesanan"){
		// buat session login dan username
		$_SESSION['id_pesanan'] = $data['id_pesanan'];
		$_SESSION['kode_booking'] = $data['kode_booking'];
		$_SESSION['id_jurusan'] = $data['id_jurusan'];
		$_SESSION['tgl_berangkat'] = $data['tgl_berangkat'];
		$_SESSION['id_kursi'] = $data['id_kursi'];
		$_SESSION['harga'] = $data['harga'];
		$_SESSION['jemput'] = $data['jemput'];
		// alihkan ke halaman dashboard admin
		header("location:tiket1.php");
		exit;
	// cek jika user login sebagai pengguna
	
}else{
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=Maaf Pembayaran Anda Sedang Diverifikasi Oleh Admin");
	}	
}
?>