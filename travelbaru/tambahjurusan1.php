<?php
require 'config.php';



//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( tambahjurusan ($_POST) > 0 ) {
       echo "
       Berhasil menambahkan jurusan, silahkan <a href='tambahjurusan1.php'>lihat</a> disini";
            
    }else {
        echo "
        Maaf tambah jurusan gagal, mohon coba lagi "; 
    }

} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jurusan</title>
    <link rel="stylesheet" type="text/css" href="css_daftar.css">
    <link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
    
</head>

<body>
    <div class ="kotaklogin">
	<p class="tulisan_login">Silahkan Daftar</p>

    <form action="" method ="post">
    <table width="25%" border="0">
            <tr>
			<td>ID Driver</td>
			<td>:</td>
			<td><select name="id_driver" id="id_driver" class="form_login" onchange='changeValue(this.value)' required>
  			<option value="">-Pilih-</option>
			<?php
			$koneksi = mysqli_connect("localhost","root","","bismillahyaallah");
            $result = mysqli_query($koneksi, "SELECT * FROM drivers ORDER BY drivers asc");
            $result = mysqli_query($koneksi, "SELECT *FROM drivers");    
			$jsArray = "var prdName = new Array();\n";
			while($row = mysqli_fetch_assoc($result))
  			 {
				echo '<option name="id_driver"  value="' . $row['id_driver'] . '">' . $row['id_driver'] . '</option>';  
				$jsArray .= "prdName3	['" . $row['id_driver'] ."'};\n";	
			}
		     ?>
				   </select>
			</td>
            <tr>
			<td>ID car</td>
			<td>:</td>
			<td><select name="id_car" id="id_car" class="form_login" onchange='changeValue(this.value)' required>
  			<option value="">-Pilih-</option>
			<?php
			$koneksi = mysqli_connect("localhost","root","","bismillahyaallah");
            $result = mysqli_query($koneksi, "SELECT * FROM cars ORDER BY cars asc");
            $result = mysqli_query($koneksi, "SELECT *FROM cars");    
			$jsArray = "var prdName = new Array();\n";
			while($row = mysqli_fetch_assoc($result))
  			 {
				echo '<option name="id_car"  value="' . $row['id_car'] . '">' . $row['id_car'] . '</option>';  
				$jsArray .= "prdName3	['" . $row['id_car'] ."'};\n";	
			}
		     ?>
				   </select>
			</td>
            <tr> 
                <td><label for="jurusan">jurusan</label></td>
                <td><input type="text"  class="form_login" id ="jurusan" name="jurusan" autocomplete="on" placeholder="Masukkan nama anda" required></td>
            </tr>
            <tr> 
                <td><label for="jam">jam</td>
                <td><input type="time"  class="form_login" id="jam" name="jam" autocomplete="on" placeholder="Masukkan tempat lahir anda" required></td>
            </tr>
            <tr> 
                <td><label for="harga">harga</td>
                <td><input type="text"  class="form_login" id="harga" name="harga" autocomplete="on" placeholder="Masukkan tanggal lahir anda" required></td>
            </tr>
            
                <td></td>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Tambahkan"></td>
            </tr>
        </table>
        
    </form>    
</body>
</html> 