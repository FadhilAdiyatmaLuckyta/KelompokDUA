<?php
require 'config.php';

	$carikode= mysqli_query($conn, "SELECT max(kode_booking) FROM pesanan"); 
	$datakode = mysqli_fetch_array($carikode);
	if($datakode) {
		$nilaikode = substr($datakode[0], 1);
		$kode = (int) $nilaikode;
		$kode = $kode + 1;
		$hasilkode = "C".str_pad($kode, 3, "0", STR_PAD_LEFT);

	}else {
		$hasilkode = "C001";
	}
//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if(isset($_POST['submit'])){
	$kode_booking   = $_POST['kode_booking'];
	$id_jurusan	= $_POST['id_jurusan'];
	$id_user 	= $_POST['id_user'];
	$tgl_berangkat 	= $_POST['tgl_berangkat'];
	$jemput 	= $_POST['jemput'];
	$tgl_pesan =  date("Y-m-d H:i:s");
	$id_kursi = $_POST['id_kursi'];
	$harga = $_POST['harga'];

	$result = mysqli_query($conn, "SELECT * FROM pesanan WHERE id_jurusan='$id_jurusan' AND id_kursi= '$id_kursi' AND tgl_berangkat = '$tgl_berangkat'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
            alert ('Maaf, Kursi telah terpakai, mohon pilih kursi lain')
            </script>";
        return false;
    }

	$query3 = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_jurusan='$id_jurusan' AND tgl_berangkat = '$tgl_berangkat'");
	$count = mysqli_num_rows($query3);
		if($count > 1 ){
			echo '<script>alert("Maaf Kursi telah terpakai semua, mohon pilih tanggal lain");</script>';
			
		}else{
			$query4=mysqli_query($conn,"INSERT INTO pesanan VALUES ('', '$kode_booking','$id_jurusan', '$id_user', '$tgl_berangkat',  '$jemput', '$tgl_pesan', '$id_kursi', '$harga')");
			echo "
			Selamat anda berhasil pesan, silahkan <a href='pembayaran.php'>bayar pesanan anda</a>";
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
				<td><input type="text" name="kode_booking" value="<?php echo $hasilkode;?>" readonly="readonly"></td>
		</tr>
		
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><select name="jurusan" id="jurusan" class="form-control" onchange='changeValue(this.value)' required>
  			<option value="">-Pilih-</option>
			<?php
			$koneksi = mysqli_connect("localhost","root","","alhamdulillah");
            $result = mysqli_query($koneksi, "SELECT * FROM jurusan ORDER BY jurusan asc");
            $result = mysqli_query($koneksi, "SELECT *FROM jurusan");    
			$jsArray = "var prdName = new Array();\n";
			while($row = mysqli_fetch_assoc($result))
  			 {
				echo '<option name="jurusan"  value="' . $row['jurusan'] . '">' . $row['jurusan'] . '</option>';  
				$jsArray .= "prdName	['" . $row['jurusan'] . "'] = {harga:'" . addslashes($row['harga']) . "', id_jurusan:'" . addslashes($row['id_jurusan']) . "',jam_beranngkat:'". addslashes($row['jam_beranngkat'])."'};\n";
				
			}
			
		 ?>
				   </select>
			</td>
			</tr>
		<tr>
			<td>Jemput</td>
			<td>:</td>
			<td><input type="text" name="jemput" ><required=required placeholder='Alamat'></td>

			<td>ID User</td>
			<td>:</td>
			<td><input type="text" name="id_user" value="<?php echo $_SESSION['id_user']; ?>" ></td>
			
			
		
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input class="form-control"  name="harga" id="harga" readonly placeholder='harga tiket'> </td>

			<td>ID jurusan</td>
			<td>:</td>
			<td><input class="form-control"  name="id_jurusan" id="id_jurusan" readonly placeholder='jam keberangkatan'> 	 </td>
			
			<td>tgl</td>
			<td>:</td>
			<td><for="shootdate"></td>
			<td><input required type="date" name="tgl_berangkat" id="shootdate" title="Choose your desired date" min="<?php echo date('Y-m-d', strtotime('+24 hours')); ?>"/></td>
			
			<td>jam keberangkatan</td>
			<td>:</td>
			<td><input class="form-control"  name="jam_beranngkat" id="jam_beranngkat" readonly placeholder='jam keberangkatan'> 	 </td>
		
			<td>id_kursi</td>
			<td>:</td>
			<td><input class="form-control"  name="id_kursi" id="id_kursi" readonly placeholder='jam keberangkatan'> 	 </td>

			
		
		</tr>

		<tr>
			<td>Kursi</td>
			<td>:</td>
			<td><select name="kursi" id="kursi" class="form-control" onchange='changeValue1(this.value)' required>
  			<option value="">-Pilih-</option>
			<?php
			$koneksi = mysqli_connect("localhost","root","","alhamdulillah");
            $result = mysqli_query($koneksi, "SELECT * FROM kursi ORDER BY kursi asc");
            $result = mysqli_query($koneksi, "SELECT *FROM kursi");    
			while($row = mysqli_fetch_assoc($result))
  			 {
				echo '<option name="no_kursi"  value="' . $row['no_kursi'] . '">' . $row['no_kursi'] . '</option>';  
				$jsArray .= "prdName	['" . $row['no_kursi'] . "'] = {id_kursi:'" . addslashes($row['id_kursi']) . "'};\n";
				
			}
			
		 ?>
				   </select>
			</td>
			
		</tr>
		
        <tr>
		<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Daftar"></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>

		
      <p>
        Selamat Datang <?php echo $_SESSION['level']; ?>
      </p>
 
      <label>Nama Lengkap User : <?php echo $_SESSION['nama']; ?></label>
      <br>
      <label>Username : <?php echo $_SESSION['username']; ?></label>
	  <br>
	  <label>Id User: <?php echo $_SESSION['id_user']; ?></label>
        <a href="index2.php">HOME</a>

		</table>
    </form>
	</fieldset>

	
	
	</body>
</html>


<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('harga').value = prdName[id].harga;
	document.getElementById('id_jurusan').value = prdName[id].id_jurusan;
	document.getElementById('jam_beranngkat').value = prdName[id].jam_beranngkat;
};
function changeValue1(id){
    document.getElementById('id_kursi').value = prdName[id].id_kursi;
	
};
</script>