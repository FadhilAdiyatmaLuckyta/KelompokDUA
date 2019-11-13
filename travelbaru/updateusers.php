<?php 
 
include_once("config.php");
$id_user = $_POST['id_user'];
$data = mysqli_query($mysqli,"SELECT * FROM users where id_user='$id_user'");
$d = mysqli_fetch_array($data);

$passwordlama = $_POST['passwordlama'];

if (md5($passwordlama) == $d['password']) {

    if ($_POST['passwordbaru'] == $_POST['ulangipasswordbaru']) {
        
        $passwordbaru = $_POST['passwordbaru'];
    
    } else {
        header("location:editusers.php?iduser=".$id_user."&pesan=passwordbaru");
        // echo 'password baru tidak cocok dengan yang diulangi';
    }

} else {
    header("location:editusers.php?iduser=".$id_user."&pesan=passwordlama");
    // echo 'password lama salah';
}

$id_user = $_GET['id_user'];
$nama= $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jekel = $_POST['jekel'];
$tipe_id = $_POST['tipe_id'];
$nomer_id = $_POST['nomer_id'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $passwordbaru;

 
mysql_query("UPDATE users SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jekel='$jekel', tipe_id='$tipe_id', nomer_id='$nomer_id', telepon='$telepon', alamat='$alamat', username='$username', password='$password' WHERE id='$id'");
 
header("location:editusers.php?pesan=update");
?>