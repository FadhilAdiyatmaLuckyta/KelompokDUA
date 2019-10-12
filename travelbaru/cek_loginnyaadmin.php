<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'konek.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data user dengan email dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index3.html");
}else{
	header("location:loginnyaadmin.php?pesan=gagal");
}
?>