<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="formtambah.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include ("config.php");
	$id_user = $_GET['id_user'];
	$data = mysqli_query($mysqli,"SELECT * FROM users where id_user='$id_user'");
	while ($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="editusers.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td><input type="text" name="tempatlahir" value="<?php echo $d['tempat_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tanggallahir" value="<?php echo $d['tanggal_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<?php if ($d['jekel'] == 'Laki-laki') { 
							$laki = 'checked="checked"';
							$perempuan = '';
						} else { 
							$perempuan = 'checked="checked"';
							$laki = '';
						} ?>

						<input type="radio" name="jekel" value="Laki-laki" <?= $laki ?>> Laki-laki
						<input type="radio" name="jekel" value="Perempuan" <?= $perempuan ?>> Perempuan
					</td>
				</tr>
				<tr> 
					<td>Tipe ID</td>
					<td>
						<?php 
						$ktp = '';
						$sim = '';
						$paspor = '';
						
						if ($d['tipe_id'] == 'KTP') {
							$ktp = 'selected="selected"';
						} elseif ($d['tipe_id'] == 'SIM') {
							$sim = 'selected="selected"';
						} else {
							$paspor = 'selected="selected"';
						}
						
						?>
						<select name="tipe_id">
							<option value="KTP" <?= $ktp ?> >KTP</option>
							<option value="SIM" <?= $sim ?> >SIM</option>
							<option value="Paspor" <?= $paspor ?> >Paspor</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nomor ID</td>
					<td><input type="number" name="nomorid" value="<?php echo $d['nomer_id']; ?>"></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><input type="number" name="telepon" value="<?php echo $d['telepon']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<?php
					if (isset($_GET['pesan'] )) {

						if ($_GET['pesan'] == 'passwordlama') {
							echo '<p style="color:red">Password lama salah, tidak sama dengan database</p>';
						} elseif ($_GET['pesan'] == 'passwordbaru') {
							echo '<p style="color:red">Password baru tidak cocok</p>';
						}
					}
				?>
				<tr>

					<td>Password</td>
					<td>
						<input type="password" name="passwordlama" placeholder="Password lama">

						<input type="password" name="passwordbaru" placeholder="Password baru">
						<input type="password" name="ulangipasswordbaru" placeholder="Ulangi password baru">
					</td>

				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>  