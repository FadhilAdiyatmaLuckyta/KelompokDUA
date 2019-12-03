<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( tambah ($_POST) > 0 ) {
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
    
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script language="javascript">
        jQuery(document).ready(function()
        {
            jQuery("#setuju").click(function(){
                if(jQuery("#button").is(":enabled"))
            {
                jQuery("#button").prop("disabled",true);
            }
            else
            {
                jQuery("#button").prop("disabled",false);
            }
        });
        }
        );
        </script>

</head>

<body>
    <div class ="kotaklogin">
	<p class="tulisan_login">Silahkan Daftar</p>

    <form action="" method ="post">
    <table width="25%" border="0">
            <tr> 
                <td><label for="nama">Nama</label></td>
                <td><input type="text"  class="form_login" id ="nama" name="nama" autocomplete="off" placeholder="Masukkan nama anda" required></td>
            </tr>
            <tr> 
                <td><label for="tmpt">Tempat Lahir</td>
                <td><input type="text"  class="form_login" id="tmpt" name="tempat_lahir" autocomplete="off" placeholder="Masukkan tempat lahir anda" required></td>
            </tr>
            <tr> 
                <td><label for="tgl">Tanggal Lahir</td>
                <td><input type="date"  class="form_login" id="tgl" name="tanggal_lahir" autocomplete="off" placeholder="Masukkan tanggal lahir anda" required></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jekel" 
                    <?php if (isset($jekel) && $jekel=="Perempuan") echo "checked";?>
                        value="Perempuan" required>Perempuan
                    <input type="radio" name="jekel"
                    <?php if (isset($jekel) && $jekel=="Laki-laki") echo "checked";?>
                    value="Laki-laki" required>Laki-laki</td>
            </tr>
            
            <tr> 
                <td><label for="nod">Nomer ID</td>
                <td><input type="text" maxlength="16" onkeypress="return hanyaAngka(event)" class="form_login" id="nod" name="nomer_id" placeholder="Masukkan nomer ID" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td><label for="telepon">Telepon</td>
                <td><input type="text" maxlength="12" onkeypress="return hanyaAngka(event)" class="form_login" id="telepon" name="telepon" autocomplete="off" placeholder="Masukkan nomer telepon anda" required></td>
            </tr>
            <tr> 
                <td><label for="alamat">Alamat</td>
                <td><input type="text"  class="form_login" id="alamat" name="alamat" autocomplete="off" placeholder="Masukkan alamat anda" required> </td>
            </tr>
            <tr> 
                <td><label for="email">Email</td>
                <td><input type="text"   class="form_login" id="email" name="email" autocomplete="off" placeholder="Masukkan email anda" required></td>
            </tr>
            <tr> 
                <td><label for="username">Username</td>
                <td><input type="text"  class="form_login" id="username" name="username" autocomplete="off" placeholder="Masukkan Username anda" required></td>
            </tr>
            <tr> 
                <td><label for="password">Password</td>
                <td><input type="password"  class="form_login" id="password" name="password" autocomplete="off" placeholder="Masukkan password anda" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="checkbox" name="level" id="setuju" class="ok" required
                <?php if (isset($level) && $level=="admin") echo "checked";?>
                value="admin">Saya Admin Baru</td>
            </tr>
            <tr> 
            
                <td></td>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Daftar" disabled></td>
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