<!DOCTYPE html>
<html>
    <head>
	    <title>Jadwal Keberangkatan</title>
		<link rel="stylesheet" type="text/css" href="css_tujuan.css">
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
		<title>Membuat Ikon Pada Title Website</title>
    </head>
    </head>
    <body>
						<?php include 'koneksi.php';
						$query = "SELECT* FROM jurusan";
						$no = 1;
						 
						$data = mysqli_query($koneksi,"SELECT * FROM jurusan");?>
    	<div class ="kotaklogin"> 
                          <h3>JADWAL KEBERANGKATAN JEMBER</h3>
						  <div class="underline-title"></div>
		<br/> <center>
	    <table border="1">
		<thead>
		    <tr>
				<th>id_jurusan</th>
				<th>id_driver</th>
				<th>id_car</th>
			    <th>jurusan</th>
				<th>jam</th>
				<th>harga</th>
				<th>harga</th>

		    </tr>  
			</thead> 
				<br/>
				<br/>	
				<tbody>
                <?php 

		                 while($row = mysqli_fetch_array($data)){
			            ?>
			            <tr>
						<td><?php echo $row['id_jurusan']; ?></td>
						<td><?php echo $row['id_driver']; ?></td>
						<td><?php echo $row['id_car']; ?></td>
						<td><?php echo $row['jurusan']; ?></td>

				        <td><?php echo $row['jam']; ?></td>
						<td><?php echo $row['harga']; ?></td>
				        <td>
						<a href="editjurusan.php?id_jurusan=".$row['id_jurusan']."'>EDIT</a>
				        </td>
			            </tr>
						<?php 
		                 }
						?>
			    </tbody>
						<center><a href="filejurusan.php" class="btn btn-success" role="button">Tambah Jurusan</a></center>  
					<div/>			
        </table> <center> 

    <div/>                              
    </body>
</html>
