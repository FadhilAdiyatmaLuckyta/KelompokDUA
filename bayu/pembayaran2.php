<?php

require 'config.php';
	
?>
<!DOCTYPE html>
<html>
	<head>	 
		<title>Input Pemesanan Tiket Travel</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
	</head>
	<body>
    <?php
        session_start();
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
				header("location:index.php?pesan=gagal");
		}if($_SESSION['status_bayar']==""){
            header("location:index.php?pesan=error");
		}	
      ?>

 <label>ID USER : <?php echo $_SESSION['id_user']; ?></label>
 <br>
 <label>jekel : <?php echo $_SESSION['tempat_lahir']; ?></label>
 <br>
 <label>Username : <?php echo $_SESSION['username']; ?></label>

		<h3 align="center">INPUT PEMESANAN TIKET TRAVEL</h3>
		<center><a href="index.php">&Lt; Tabel Pemesanan Tiket Travel</a></center></br>
		<fieldset style="width: 50%; margin: auto;">
			<legend>Form Input Pemesanan Tiket Travel</legend>
		<form action="session_pesan.php" method="post">
		<table>

		<tr>
        <tr>
				<td>Kode Payment</td>
				<td>:</td>
				<td><input type="text" name="kode_payment"  value="<?php echo $_SESSION["kode_payment"]; ?>"/></td>
		</tr>		
        <tr>
				<td>id pesanan</td>
				<td>:</td>
				<td><input type="text" name="id_pesanan"  value="<?php echo $_SESSION["id_pesanan"]; ?>"/></td>
		</tr>
        <tr>
				<td>id_payment</td>
				<td>:</td>
				<td><input type="text" name="ok"  value="<?php echo $_SESSION["id_payment"]; ?>"/></td>
		</tr>		
        <tr>
				<td>status</td>
				<td>:</td>
				<td><input type="text" name="ok"  value="<?php echo $_SESSION["status_bayar"]; ?>"/></td>
		</tr>
        <tr>
		<td><input type="submit" name= "login"  id="button" class="tombol_login" value="cari"></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
      <p>
        Selamat Datang <?php echo $_SESSION['level']; ?>
      </p>
 
      <label>Nama Lengkap User : <?php echo $_SESSION['id_user']; ?></label>
      <br>
      <label>Username : <?php echo $_SESSION['username']; ?></label>
      <p>
        <a href="index2.php">HOME</a>

		</table>
    </form>
	</fieldset>
	</body>
</html>
