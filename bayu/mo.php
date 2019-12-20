<?php
require 'config.php';

	
//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( pesan($_POST) > 0 ) {
       echo "
       Berhasil pesan, silahkan <a href='multi.php'>pilih kursi</a> disini";
            
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
		<title>Input Pemesanan Tiket Travel</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">

		
	</head>
	<body>

	
		<h3 align="center">INPUT PEMESANAN TIKET TRAVEL</h3>
		<center><a href="index.php">&Lt; Tabel Pemesanan Tiket Travel</a></center></br>
		<fieldset style="width: 50%; margin: auto;">
			<legend>Form Input Pemesanan Tiket Travel</legend>
		<form action="hasilkursi.php" method="post">
		<table>

		
		
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
			

			<td>ID user</td>
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
		
			
		
		</tr>
		
        <tr>
		<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="cek kursi"></td>
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


<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('harga').value = prdName[id].harga;
	document.getElementById('id_jurusan').value = prdName[id].id_jurusan;
	document.getElementById('jam_beranngkat').value = prdName[id].jam_beranngkat;
};
</script>