
<?php 
    include "koneksi.php";
    $cek_user=mysql_num_rows(mysql_query("SELECT * FROM tb_user WHERE email='$_POST[email]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Email Sudah Ada Yang Menggunakan");
              window.location="tambahuser.php";
              </script>';
              exit();
    }
    else {
        $password    =md5('$_POST[password]');
        mysql_query("INSERT INTO tb_user (nama, telp, alamat, email, password)
        VALUES ('$_POST[nama]', '$_POST[telp]', '$_POST[alamat]', '$_POST[email]', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="tambahuser.php";
              </script>';
              exit();
    }
?>