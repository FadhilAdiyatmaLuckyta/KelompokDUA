<?php 
$koneksi = mysqli_connect("localhost","root","","travel");

//cek koneksi
if (mysqli_connect_error()){
    echo "koneksine gak kenek:" . mysqli_connect_error();
}

?>