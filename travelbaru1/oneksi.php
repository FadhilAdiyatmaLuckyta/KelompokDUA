<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$q = mysql_query("select * from tb_user where username='$email' and password='$password'");
$r = mysql_fetch_array ($q);
$q2 = mysql_query("select * from tb_admin where username='$username' and password='$password'");
$row = mysql_fetch_array ($q2);
if (mysql_num_rows($q) == 1) {
    $_SESSION['id_admin'] = $r['id_admin'];
    $_SESSION['nama_admin'] = $r['nama_admin'];
    $_SESSION['telp'] = $r['telp'];
    $_SESSION['alamat'] = $r['alamat'];
    $_SESSION['email'] = $r['email'];
    $_SESSION['password'] = $r['password'];
    $_SESSION['level'] = 'admin';
    
    header('location:index.html');
}
elseif (mysql_num_rows($q2) == 1) {
    $_SESSION['nama_user'] = $row['nama_user'];
    $_SESSION['telp'] = $row['telp'];
    $_SESSION['alamat'] = $row['alamat'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['level'] = 'user';
    header('location:index2.html');
}else {
    echo "Login Gagal";
}
?>