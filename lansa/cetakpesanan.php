<?php
require 'config.php';

	//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 

	
	$query3 = mysqli_query($conn,"SELECT * FROM pesanan ORDER BY id_pesanan DESC LIMIT 1");
	$data  = mysqli_fetch_array($query3);

	//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
	if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( bayar($_POST) > 0 ) {
       echo "
       Berhasil menambahkan jurusan, silahkan <a href='daftarjurusan.php'>lihat</a> disini";
            
    }else {
        echo "
        Maaf tambah jurusan gagal, mohon coba lagi"; 
    }

} 
?>


<?php
        session_start();
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
                header("location:index.php?pesan=gagal");
        }
      ?>

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
			<legend>Form Input Pemesanan Tiket Travel</legend>
		<form action="" method="post">
		<table>

		<tr>
				<td>Kode Booking</td>
				<td>:</td>
				<td><input type="text" name="kode_booking"  value="<?php echo $data["kode_booking"]; ?>"/></td>
		</tr>

		<tr>
				<td>id pesanan</td>
				<td>:</td>
				<td><input type="text" name="id_pesanan"  value="<?php echo $data["id_pesanan"]; ?>"/></td>
		</tr>
		
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			
			</td>
			</tr>
		<tr>
			<td>Jemput</td>
			<td>:</td>
			<td><input type="text" name="jemput" value="<?php echo $data["jemput"]; ?>"  ><required=required placeholder='Alamat'></td>

			<td><input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>" ></td>
			
			
		
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input class="form-control"  name="harga" id="harga" value="<?php echo $data["harga"]; ?>"/> </td>

			<td>ID jurusan</td>
			<td>:</td>
			<td><input class="form-control"  name="id_jurusan" id="id_jurusan" readonly placeholder='jam keberangkatan'> 	 </td>
			
			<td>tgl</td>
			<td>:</td>
			<td><for="shootdate"></td>
			<td><input  type="date" name="tgl_berangkat"   value="<?php echo $data["tgl_berangkat"]; ?>"/></td>
			
			<td>jam keberangkatan</td>
			<td>:</td>
			<td><input class="form-control"  name="jam_beranngkat" id="jam_beranngkat" readonly placeholder='jam keberangkatan'> 	 </td>

			<td>Status Bayar</td>
			<td>:</td>
			<td><input class="form-control"  name="status_bayar" id="status_bayar" value="Belum Lunas" readonly placeholder='jam keberangkatan'> 	 </td>
		
			<td>id_kursi</td>
			<td>:</td>
			<td><input class="form-control"  name="id_kursi" id="id_kursi" value="<?php echo $data["id_kursi"]; ?>" readonly placeholder='jam keberangkatan'> 	 </td>

		
		</tr>

		<tr>
			<td>Kursi</td>
			<td>:</td>
			
            
            <a href='pembayaran.php'>Lanjut Bayar</a> disini
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

	
	<script>
    window.print();
</script>    
	</body>
</html>
