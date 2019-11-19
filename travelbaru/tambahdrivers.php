<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( tambahkan ($_POST) > 0 ) {
       echo "
       Berhasil menambahkan driver, silahkan <a href='daftardrivers.php'>lihat</a> disini";
            
    }else {
        echo "
        Maaf tambah driver gagal, mohon coba lagi"; 
    }

} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sopir</title>
    <link rel="stylesheet" type="text/css" href="css_daftar.css">
    <link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
    
</head>

<body>
    <div class ="kotaklogin">
	<p class="tulisan_login">Silahkan Daftar</p>

    <form action="" method ="post">
    <table width="25%" border="0">
            <tr> 
                <td><label for="nama">Nama</label></td>
                <td><input type="text"  class="form_login" id ="nama" name="nama_driver" autocomplete="off" placeholder="Masukkan nama anda" required></td>
            </tr>
            <tr> 
                <td><label for="tmpt">Tempat Lahir</td>
                <td><input type="text"  class="form_login" id="tmpt" name="tempat_lahirdriver" autocomplete="off" placeholder="Masukkan tempat lahir anda" required></td>
            </tr>
            <tr> 
                <td><label for="tgl">Tanggal Lahir</td>
                <td><input type="date"  class="form_login" id="tgl" name="tanggal_lahirdriver" autocomplete="off" placeholder="Masukkan tanggal lahir anda" required></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jenis_kelamin" 
                    <?php if (isset($jekel) && $jekel=="Perempuan") echo "checked";?>
                        value="Perempuan" required>Perempuan
                    <input type="radio" name="jenis_kelamin"
                    <?php if (isset($jekel) && $jekel=="Laki-laki") echo "checked";?>
                    value="Laki-laki" required>Laki-laki</td>
            </tr>
            <tr> 
                <td><label for="nod">Nomer SIM</td>
                <td><input type="text" maxlength="16" onkeypress="return hanyaAngka(event)" class="form_login" id="nod" name="no_sim" placeholder="Masukkan nomer ID" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td><label for="telepon">Telepon</td>
                <td><input type="text" maxlength="12" onkeypress="return hanyaAngka(event)" class="form_login" id="telepon" name="telp" autocomplete="off" placeholder="Masukkan nomer telepon anda" required></td>
            </tr>
            <tr> 
                <td><label for="alamat">Alamat</td>
                <td><input type="text"  class="form_login" id="alamat" name="alamat_driver" autocomplete="off" placeholder="Masukkan alamat anda" required> </td>
            </tr>
            <tr> 
            
                <td></td>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Tambahkan"></td>
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