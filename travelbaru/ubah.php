<?php
require 'config.php';

//AMBIL DATA DI URL
$id_user= $_GET["id_user"];

// QUERY DATA USER BERDASARKAN ID
 $user= query("SELECT * FROM users WHERE id_user = $id_user")[0];


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil diubah apa gak
    if( ubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasi diubah');
            document.location.href = 'daftarusers.php';
        </script>
    ";
            
    }else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'daftarusers.php';
        </script>
    ";
    }

} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Pengguna</title>

</head>

<body>
    <h1> Tambah Data Pengguna<h1>

    <form action="" method ="post">
    <table width="25%" border="0">
            <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>"
            <tr> 
                <td><label for="nama">Nama</label></td>
                <td><input type="text"  class="form_login" id ="nama" name="nama" autocomplete="off" required value="<?= $user["nama"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="tmpt">Tempat Lahir</td>
                <td><input type="text"  class="form_login" id="tmpt" name="tempat_lahir" autocomplete="off" required value="<?= $user["tempat_lahir"]; ?>" ></td>
            </tr>
            <tr> 
                <td><label for="tgl">Tanggal Lahir</td>
                <td><input type="date"  class="form_login" id="tgl" name="tanggal_lahir" autocomplete="off" required value="<?= $user["tanggal_lahir"]; ?>"></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><?php if ($user['jekel'] == 'Laki-laki') { 
							$laki = 'checked="checked"';
							$perempuan = '';
						} else { 
							$perempuan = 'checked="checked"';
							$laki = '';
						} ?>

						<input type="radio" name="jekel" value="Laki-laki" <?= $laki ?>> Laki-laki
						<input type="radio" name="jekel" value="Perempuan" <?= $perempuan ?>> Perempuan</td>
            </tr>
            
            <tr> 
                <td><label for="nod">Nomer ID</td>
                <td><input type="text" maxlength="16" onkeypress="return hanyaAngka(event)" class="form_login" id="nod" name="nomer_id" autocomplete="off" required value="<?= $user["nomer_id"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="telepon">Telepon</td>
                <td><input type="text" maxlength="13" onkeypress="return hanyaAngka(event)" class="form_login" id="telepon" name="telepon" autocomplete="off"  required value="<?= $user["telepon"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="alamat">Alamat</td>
                <td><input type="text"  class="form_login" id="alamat" name="alamat" autocomplete="off" required value="<?= $user["alamat"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="email">Email</td>
                <td><input type="text"  class="form_login" id="email" name="email" autocomplete="off" required value="<?= $user["email"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="username">Username</td>
                <td><input type="text"  class="form_login" id="username" name="username" autocomplete="off" required value="<?= $user["username"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="password">Password</td>
                <td><input type="password"  class="form_login" id="password" name="password" autocomplete="off" required value="<?= $user["password"]; ?>"></td>
            </tr>
            <tr> 
            
                <td></td>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Ubah"></td>
            </tr>
        </table>
        
    </form>
    
    
</body>
</html>