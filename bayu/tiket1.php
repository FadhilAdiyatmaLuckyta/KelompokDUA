<?php
require 'config.php';


?>
<!DOCTYPE html>
<html>
	<head>	 
		<title>TIKET</title>
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
        if($_SESSION['id_pesanan']==""){
            header("location:index.php?pesan=error");
		}	
      ?>

 <label>ID USER : <?php echo $_SESSION['id_user']; ?></label>
 <br>
 <label>jekel : <?php echo $_SESSION['tempat_lahir']; ?></label>
 <br>
 <label>Username : <?php echo $_SESSION['username']; ?></label>

		<h3 align="center">TIKET</h3>
		<center><a href="index.php">&Lt; Tabel Pemesanan Tiket Travel</a></center></br>
		<fieldset style="width: 50%; margin: auto;">
			<legend>Form Input Pemesanan Tiket Travel</legend>
		<form action="" method="post" >
		<table>

		
        <tr>
				<td>Kode Booking</td>
				<td>:</td>
				<td><input type="hidde" name="kode_booking" readonly value="<?php echo $_SESSION["kode_booking"]; ?>"/></td>
		</tr>		

        <tr>
				<td>id pesanan</td>
				<td>:</td>
				<td><input type="text" name="id_pesanan" readonly value="<?php echo $_SESSION["id_pesanan"]; ?>"/></td>
		</tr>
		
        <tr>
		<?php
		$idjur=$_SESSION['id_jurusan'];
		$nama=mysqli_query($conn, "SELECT * FROM jurusan WHERE id_jurusan='$idjur'");
		while ($row=mysqli_fetch_array($nama))
		 {
			?>
			<td>Jurusan</td>
				<td>:</td>
				<td><input type="text" name="id_pesanan" readonly value="<?php echo $row["jurusan"]; ?>"/></td>
		<?php
		} 
		?>	
		</tr>
		<?php
		$kur=$_SESSION['id_kursi'];
		$kursi=mysqli_query($conn, "SELECT * FROM kursi WHERE id_kursi='$kur'");
		while ($row=mysqli_fetch_array($kursi))
		 {
			?>
			<td>kursi</td>
				<td>:</td>
				<td><input type="text" name="id_pesanan" readonly value="<?php echo $row["no_kursi"]; ?>"/></td>
		<?php
		} 
		?>		
        <tr>
				<td>tanggal berangkat</td>
				<td>:</td>
				<td><input type="text" name="tanggal berangkat" readonly value="<?php echo $_SESSION["tgl_berangkat"]; ?>"/></td>
		</tr>
		<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" readonly value="<?php echo $_SESSION["harga"]; ?>"/></td>
		</tr>
		<tr>
				<td>jemput</td>
				<td>:</td>
				<td><input type="text" name="jemput" readonly value="<?php echo $_SESSION["jemput"]; ?>"/></td>
		</tr>
        <tr>
		<td><a href="cetaktiket.php" target="_blank"><button  type="button" id="button" class="tombol_login" value="Cetak Tiket">Cetak Tiket</button></a></td>
            
        </tr>
      <p>
        Selamat Datang <?php echo $_SESSION['level']; ?>
      </p>
 
      <label>Nama Lengkap User : <?php echo $_SESSION['id_user']; ?></label>
      <br>
      <label>Username : <?php echo $_SESSION['username']; ?></label>
      <p>
        <a href="index2.php">HOME</a>
		<a href="cetaktiket.php" target="_blank"> Cetak </a>
		</table>
    </form>
	</fieldset>
	</body>
</html>
