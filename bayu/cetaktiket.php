<?php
require 'config.php';


?>
<!DOCTYPE html>
<html>
	<head>	 
		<title>TIKET LANSA TRANS</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">

  <style>
table.roundedCorners { 
  border: 1px solid Black;
  border-radius: 13px; 
  border-spacing: 0;
  }
table.roundedCorners td, 
table.roundedCorners th { 
  border-bottom: 1px solid Black;
  padding: 20px; 
  }
table.roundedCorners tr:last-child > td {
  border-bottom: none;
}

</style>
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
		<fieldset style="width: 40%; margin: auto;">
		<form action="" method="post" >
		<table class="roundedCorners">
		
	

        <tr>
				<td>Kode Booking</td>
				<td>:</td>
				<td><?php echo $_SESSION["kode_booking"]; ?></td>
				<td>Nama Penumpang</td>
				<td>:</td>
			<td> <?php echo $_SESSION["nama"]; ?>  </td>
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
        
				<td>Tanggal Berangkat</td>
				<td>:</td>
			<td> <?php echo $_SESSION["tgl_berangkat"]; ?>  </td>
		
		<tr>
				<td>Harga</td>
				<td>:</td>
				<td><?php echo $_SESSION["harga"]; ?></td>
		
	
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
