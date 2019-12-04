<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( jurusan($_POST) > 0 ) {
       echo "
       Berhasil menambahkan jurusan, silahkan <a href='daftarjurusan.php'>lihat</a> disini";
            
    }else {
        echo "
        Maaf tambah jurusan gagal, mohon coba lagi"; 
    }

} 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Jurusan Baru</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
	</head>
	<body>
		<h3 align="center">Tambah Jurusan Baru</h3>
		<center><a href="index.php">&Lt; Tabel Pemesanan Tiket Travel</a></center></br>
		<fieldset style="width: 50%; margin: auto;">
			<legend>Form Tambah Jurusan Baru</legend>
		<form action="" method="post" enctype="multipart/form-data">
		<table>
		
		<tr>
			<td>Driver</td>
			<td>:</td>
			<td><select name="nama_driver" id="nama_driver" class="form-control" onchange='changeValue(this.value)' required>
  			<option value="">-Pilih-</option>
			<?php
			$koneksi = mysqli_connect("localhost","root","","alhamdulillah");
            $result = mysqli_query($koneksi, "SELECT * FROM drivers ORDER BY drivers asc");
            $result = mysqli_query($koneksi, "SELECT *FROM drivers");    
			$jsArray = "var prdName = new Array();\n";
			while($row = mysqli_fetch_assoc($result))
  			 {
				echo '<option name="nama_driver"  value="' . $row['nama_driver'] . '">' . $row['nama_driver'] . '</option>';  
				$jsArray .= "prdName	['" . $row['nama_driver'] . "'] = {id_driver:'" . addslashes($row['id_driver']) . "'};\n";
				
			}
			
		 ?>
				   </select>
			</td>
			
			
		</tr>
		
			</td>
		</tr>
		<tr>

			<td>ID Driver</td>
			<td>:</td>
			<td><input  class="form-control"  name="id_driver" id="id_driver" readonly></td>





		</tr>
		<tr>

			<td>Mobil</td>
			<td>:</td>
			<td><input type="text" class="form-control"  name="mobil" id="mobil"  placeholder='harga tiket'> </td>

			<td>Plat Nomer</td>
			<td>:</td>
			<td><input type="text" class="form-control"  name="plat_nomor" id="plat_nomor"  placeholder='harga tiket'> </td>

			<td>Kursi</td>
			<td>:</td>
			<td><input type="number" max="4" min="1" class="form-control"  name="kursi" id="kursi"  placeholder='harga tiket'> </td>




			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" class="form-control"  name="jurusan" id="jurusan"  placeholder='harga tiket'> </td>

			<td>jam keberangkatan</td>
			<td>:</td>
			<td><input type= "time" class="form-control"  name="jam" id="jam"  placeholder='jam keberangkatan'> 	 </td>
			
			<td>Harga</td>
			<td>:</td>
			<td><input type="text" class="form-control"  name="harga" id="harga"  placeholder='harga tiket'> </td>

			<td>Foto Mobil</td>
			<td>:</td>
			<td><input type="file" class="form-control"  name="gambar" id="gambar"  placeholder='harga tiket'> </td>

				
		</tr>
		
		
        <tr>
			<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Tambahkan"></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
		</table>
    </form>
	</fieldset>
	
	</body>
</html>
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('id_driver').value = prdName[id].id_driver;
	
};
</script>
<script type="text/javascript"> 
<?php  ?>
function changeValue1(id){
    document.getElementById('id_car').value = prdName[id].id_car;
	
};
</script>