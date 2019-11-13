<!DOCTYPE html>
<html>
	<head>
		<title>Input Pemesanan Tiket Travel</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
	</head>
	<body>
		<h3 align="center">INPUT PEMESANAN TIKET TRAVEL</h3>
		<center><a href="index.php">&Lt; Tabel Pemesanan Tiket Travel</a></center></br>
		<fieldset style="width: 50%; margin: auto;">
			<legend>Tambah Jurusan</legend>
		<form action="nmm.php" method="post">
		<table>
		<tr>
			<td>Driver</td>
			<td>:</td>
			<td><select name="nama_driver" id="nama_driver" class="form-control" onchange='changeValue(this.value)' required>
  			<option value="">-Pilih-</option>
			<?php
			$koneksi = mysqli_connect("localhost","root","","bismillahyaallah");
            $result = mysqli_query($koneksi, "SELECT * FROM drivers ORDER BY drivers asc");
            $result = mysqli_query($koneksi, "SELECT *FROM drivers");    
			$jsArray = "var prdName = new Array();\n";
			while($row = mysqli_fetch_assoc($result))
  			 {
				echo '<option name="nama_driver"  value="' . $row['nama_driver'] . '">' . $row['nama_driver'] . '</option>';  
				$jsArray .= "prdName	['" . $row['nama_driver'] ."'};\n";
				
			}
			
		 ?>
				   </select>
			</td>

            <tr>
			<td>Car</td>
			<td>:</td>
			<td><select name="ok" id="ok" class="form-control" onchange='changeValue(this.value)' required>
  			<option value="">-Pilih-</option>
			<?php
			$koneksi = mysqli_connect("localhost","root","","bismillahyaallah");
            $result1 = mysqli_query($koneksi, "SELECT * FROM cars ORDER BY cars asc");
            $result1 = mysqli_query($koneksi, "SELECT *FROM cars");    
			$jsArray = "var prdName = new Array();\n";
			while($row1 = mysqli_fetch_assoc($result1))
  			 {
				echo '<option name="merk"  value="' . $row1['merk'] . '">' . $row1['merk'] . '</option>';  
				$jsArray .= "prdName	['" . $row1['merk'] ."'};\n";
				
			}
			
		 ?>
				   </select>
			</td>
			
			
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" name="jurusan"required=required placeholder='Jurusan'></td>
			<td>Jam Keberangkatan</td>
			<td>:</td>
			<td><input type="time" name="jam" required=required placeholder=''></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input class="form-control"  name="harga" id="harga" placeholder='harga tiket'> </td>
			
			
		</tr>
        <tr>
            <td><input type="Submit" value="Simpan" /></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
		</table>
    </form>
	<?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        
        $id_driver= $_POST['id_driver'];
        $id_car = $_POST['id_car'];
        $jurusan = $_POST['jurusan'];
        $jam = $_POST['jam'];
        $harga = $_POST['harga'];
       


        // include database connection file
        include_once("config.php");

        
        

        // Insert user data into table
        $insert = mysqli_query($mysqli, "INSERT INTO jurusan(id_jurusan,id_driver,id_car,jurusan,jam,harga) VALUES('$id_jurusan','$id_driver','$id_car','$jurusan','$jam','$harga')");

        // Show message when user added
        echo "Selamat anda telah mendaftar, silahkan <a href='login.php'>login</a> kembali";

        
    
    
    }
    ?>
	</fieldset>
	
	</body>
</html>
