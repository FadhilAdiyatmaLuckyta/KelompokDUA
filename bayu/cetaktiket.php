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
	<a href="cetaktiket.php" target="_blank"> </a>
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

 

		<h3 align="center">TIKET</h3>
		<fieldset style="width: 50%; margin: auto;">
		<form action="" method="post" >
		<table>
		
		
        <tr>
				<td>Kode Booking</td>
				<td>:</td>
				<td><?php echo $_SESSION["kode_booking"]; ?></td>
		</tr>		
		<tr>
				<td>Nama Penumpang</td>
				<td>:</td>
			<td> <?php echo $_SESSION["nama"]; ?>  </td>
		</tr>
        <tr>
				<td>id pesanan</td>
				<td>:</td>
				<td><?php echo $_SESSION["id_pesanan"]; ?></td>
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
				<td><?php echo $row["jurusan"]; ?> </td>
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
			<td>Kursi</td>
				<td>:</td>
				<td><?php echo $row["no_kursi"]; ?></td>
		<?php
		} 
		?>		
        <tr>
				<td>Tanggal Berangkat</td>
				<td>:</td>
			<td> <?php echo $_SESSION["tgl_berangkat"]; ?>  </td>
		</tr>
		<tr>
				<td>Harga</td>
				<td>:</td>
				<td><?php echo $_SESSION["harga"]; ?></td>
		</tr>
		<tr>
				<td>Jemput</td>
				<td>:</td>
				<td><?php echo $_SESSION["jemput"]; ?></td>
		</tr>
        
      

		</table>
        <script>
		window.print();
	</script>
    </form>
	</fieldset>
	</body>
</html>
