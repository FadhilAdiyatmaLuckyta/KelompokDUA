<?php
include 'config.php';
// menyimpan data id kedalam variabel
$email   = $_GET['email'];
// query SQL untuk insert data
$result="DELETE from tb_user where email='$email'";
mysqli_query($config, $result);
// mengalihkan ke halaman index.php
header("location:filetambah.php");
?>