<?php 
$koneksi = mysqli_connect("localhost","root","","lansa_trans");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>