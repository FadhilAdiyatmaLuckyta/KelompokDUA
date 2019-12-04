<?php
require 'config.php';

//AMBIL DATA DI URL
$id_driver= $_GET["id_driver"];

// QUERY DATA USER BERDASARKAN ID
 $driver = query("SELECT * FROM drivers WHERE id_driver = $id_driver")[0];


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil diubah apa gak
    if( driverubah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasi diubah');
            document.location.href = 'daftardrivers.php';
        </script>
    ";
            
}else {
    echo "
    <script>
        alert('data gagal diubah!');
        document.location.href = 'daftardrivers.php';
    </script>
";

    }
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Drivers</title>

</head>

<body>
    <h1> Tambah Data Drivers<h1>

    <form action="" method ="post">
    <table width="25%" border="0">
            <input type="hidden" name="id_driver" value="<?= $driver["id_driver"]; ?>"
            <tr> 
                <td><label for="nama">Nama</label></td>
                <td><input type="text"  class="form_login" id ="nama" name="nama_driver" autocomplete="off" required value="<?= $driver["nama_driver"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="tmpt">Tempat Lahir</td>
                <td><input type="text"  class="form_login" id="tmpt" name="tempat_lahirdriver" autocomplete="off" required value="<?= $driver["tempat_lahirdriver"]; ?>" ></td>
            </tr>
            <tr> 
                <td><label for="tgl">Tanggal Lahir</td>
                <td><input type="date"  class="form_login" id="tgl" name="tanggal_lahirdriver" autocomplete="off" required value="<?= $driver["tanggal_lahirdriver"]; ?>"></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><?php if ($driver['jenis_kelamin'] == 'Laki-laki') { 
							$laki = 'checked="checked"';
							$perempuan = '';
						} else { 
							$perempuan = 'checked="checked"';
							$laki = '';
						} ?>

						<input type="radio" name="jenis_kelamin" value="Laki-laki" <?= $laki ?>> Laki-laki
						<input type="radio" name="jenis_kelamin" value="Perempuan" <?= $perempuan ?>> Perempuan</td>
            </tr>
            
            <tr> 
                <td><label for="nod">Nomer SIM</td>
                <td><input type="text" maxlength="16" onkeypress="return hanyaAngka(event)" class="form_login" id="nod" name="no_sim" autocomplete="off" required value="<?= $driver["no_sim"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="telepon">Telepon</td>
                <td><input type="text" maxlength="13" onkeypress="return hanyaAngka(event)" class="form_login" id="telepon" name="telp" autocomplete="off"  required value="<?= $driver["telp"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="alamat">Alamat</td>
                <td><input type="text"  class="form_login" id="alamat" name="alamat_driver" autocomplete="off" required value="<?= $driver["alamat_driver"]; ?>"></td>
            </tr>
           </tr>
            <tr> 
            
                <td></td>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Ubah"></td>
            </tr>
        </table>
        
    </form>
    
    
</body>
</html>