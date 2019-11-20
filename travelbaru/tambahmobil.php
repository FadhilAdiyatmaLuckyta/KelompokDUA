<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( nambah ($_POST) > 0 ) {
       echo "
       Selamat anda telah mendaftar, silahkan <a href='login.php'>login</a> kembali";
            
    }else {
        echo "
        Maaf daftar gagal, mohon coba lagi"; 
    }

} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" type="text/css" href="css_daftar.css">
    <link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
    

</head>

<body>
    <div class ="kotaklogin">
	<p class="tulisan_login">Silahkan Daftar</p>

    <form action="" method ="post" enctype="multipart/form-data">
    <table width="25%" border="0">
            <tr> 
                <td><label for="merk">Merk Mobil</label></td>
                <td><input type="text"  class="form_login" id ="merk" name="merk" autocomplete="off" placeholder="Masukkan nama anda" required></td>
            </tr>
            <tr> 
                <td><label for="warna">Warna</td>
                <td><input type="text"  class="form_login" id="warna" name="warna" autocomplete="off" placeholder="Masukkan tempat lahir anda" required></td>
            </tr>
            <tr> 
                <td><label for="nopol">Plat Nomor</td>
                <td><input type="text"  class="form_login" id="nopol" name="nopol" autocomplete="off" placeholder="Masukkan tanggal lahir anda" required></td>
            </tr>
            
            <tr> 
                <td><label for="kursi">Jumlah Kursi</td>
                <td><input type="number"  class="form_login" id="kursi" name="kursi" placeholder="Masukkan nomer ID" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td><label for="foto">Foto</td>
                <td><input type="file"  class="form_login" id="gambar" name="gambar" autocomplete="off" placeholder="Masukkan nomer telepon anda" required></td>
            </tr>
            <tr> 
            
                <td></td>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Daftar" ></td>
            </tr>
        </table>
        
    </form>

    <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
    
    
</body>
</html>