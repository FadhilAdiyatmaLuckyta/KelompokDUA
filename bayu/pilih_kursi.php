<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( pesan($_POST) > 0 ) {
       echo "
       Berhasil pesan, silahkan <a href='pilih_kurs.php'>lihat</a> disini";
            
    }else {
        echo "
        Maaf pesan gagal, mohon coba lagi"; 
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
		<title>Input kursi Tiket Travel</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
	</head>
	<body>
		<h3 align="center">INPUT KURSI TIKET TRAVEL</h3>
		<center><a href="index.php">&Lt; Tabel Pemesanan Tiket Travel</a></center></br>
		<fieldset style="width: 50%; margin: auto;">
			<legend>Form Input Kursi Tiket Travel</legend>
		<form action="" method="post">
		<table>
        <?php
        session_start();
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
                header("location:index.php?pesan=gagal");
        }
      ?>
      <p>
        Selamat Datang <?php echo $_SESSION['id_pesan']; ?>
      </p>
 
    
        <a href="logout.php">logout</a>

		<tr>
			</td>
			
			<td>Jumlah Tiket</td>
			<td>:</td>
			<td><input type="number" min="1" max="4" name="jumlah_pesan" required=required placeholder='Jumlah Tiket'></td>
			
			<td>no kursi</td>
			<td>:</td>
			<td><select name="no_kursi"><option value='' selected>- Pilih -</option>
				<?php
				$kursi = mysqli_query($conn,"SELECT * FROM kursi");
					while ($row = mysqli_fetch_array($kursi)) {
						echo "<option value='$row[no_kursi]'>$row[nama_kursi]</option>";
					}?><required=required placeholder='no kursi'></td>

		</tr>
			
			<td>tgl</td>
			<td>:</td>
			<td><for="shootdate"></td>
			<td><input required type="date" name="tgl_berangkat" id="shootdate" title="Choose your desired date" min="<?php echo date('Y-m-d'); ?>"/></td>
			
			<td>jam keberangkatan</td>
			<td>:</td>
			<td><input class="form-control"  name="jam_beranngkat" id="jam_beranngkat" readonly placeholder='jam keberangkatan'> 	 </td>
		</tr>
		
        <tr>
            <td><input type="submit" name="submit" value="Simpan" /></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
		
      <p>
        Selamat Datang <?php echo $_SESSION['level']; ?>
      </p>
 
      <label>Nama Lengkap User : <?php echo $_SESSION['id_user']; ?></label>
      <br>
      <label>Username : <?php echo $_SESSION['username']; ?></label>
      <p>
        <a href="logout.php">logout</a>

		</table>
    </form>
	</fieldset>

	
	
	</body>
</html>