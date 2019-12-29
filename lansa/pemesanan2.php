<?php
require 'config.php';

	$carikode= mysqli_query($conn, "SELECT max(kode_booking) FROM pesan"); 
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
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( pesan($_POST) > 0 ) {
       echo "
       Berhasil pesan, silahkan <a href='pemesanan2.php'>bayar</a> disini";
            
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

		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script language="javascript">
        jQuery(document).ready(function()
        {
            jQuery("#setuju").click(function(){
                if(jQuery("#button").is(":enabled"))
            {
                jQuery("#button").prop("disabled",true);
            }
            else
            {
                jQuery("#button").prop("disabled",false);
            }
        });
        }
        );
        </script>
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
			
			<td>Jumlah Tiket</td>
			<td>:</td>
			<td><input type="number" min="1" max="7" name="jumlah_pesan" required=required placeholder='Jumlah Tiket'></td>
			
	

		</tr>
		<tr>
			<td>Jemput</td>
			<td>:</td>
			<td><input type="text" name="jemput" ><required=required placeholder='Alamat'></td>

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
			<td><input required type="date" name="tgl_berangkat" id="shootdate" title="Choose your desired date" min="<?php echo date('Y-m-d'); ?>"/></td>
			
			<td>jam keberangkatan</td>
			<td>:</td>
			<td><input class="form-control"  name="jam_beranngkat" id="jam_beranngkat" readonly placeholder='jam keberangkatan'> 	 </td>
		
			<td>Total</td>
			<td>:</td>
			<td><input class="form-control"  name="total" id="total" readonly placeholder='harga tiket'> </td>
			<tr> 
                <td></td>
                <td><input type="checkbox" name="status_pesan" id="setuju" class="ok" required
                <?php if (isset($status_pesan) && $status_pesan=="berhasil") echo "checked";?>
                value="berhasil">Saya sudah pesan</td>
            </tr>
		
		</tr>
		
        <tr>
		<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Daftar" disabled></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>

		
      <p>
        Selamat Datang <?php echo $_SESSION['level']; ?>
      </p>
 
      <label>Nama Lengkap User : <?php echo $_SESSION['nama']; ?></label>
      <br>
      <label>Username : <?php echo $_SESSION['username']; ?></label>
      <p>
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
</script>
 <script type="text/javascript" language="Javascript">
 var total=;
 hargasatuan = document.formD.harga.value;
 document.formD.txtDisplay.value = hargasatuan;
 jumlah = document.formD.jmlpsn.value;
 document.formD.txtDisplay.value = jumlah;
 function OnChange(value){
 hargasatuan = document.formD.harga.value;
 jumlah = document.formD.jmlpsn.value;
 total = hargasatuan * jumlah;
 document.formD.txtDisplay.value = total;
 }
 </script>