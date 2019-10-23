
<html>
<head>
    <title>Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="css_pemesanan.css">
</head>

<body>
<?php

  require_once 'config.php';

  $query1 = "SELECT * FROM tb_jurusan ORDER BY id_jurusan DESC";

  $result = mysqli_query($mysqli, $query1);
  
  

  ?>
    
    <br/><br/>
    <div class ="kotaklogin">
	<p class="tulisan_login">Silahkan Pesan</p>
    <form action="pemesanan.php" method="post" name="form1">
        <table width="25%" border="0">
           <tr> 
                <td>Email</td>
                <td><input type="text" class="form_login" name="email"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><select > <?php while($data = mysqli_fetch_assoc($result) ){?>

                    <option value="<?php echo $data['id_jurusan']; ?>"><?php echo $data['jurusan']; ?></option>
                
                   <?php } ?>
                
                </select></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" class="form_login" name="harga"></td>
            </tr>
            
            <tr> 
                <td>Keberangkatan</td>
                <td><input type="date" min="2019-10-16"  class="form_pesan"  name="tgl_berangkat"><td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="number" min="1" max="5"  class="form_iyo"  name="jumlah" /><td>
            </tr>
            <tr> 
                <td>Alamat Jemput</td>
                <td><textarea class="form-control" rows="5"  name="alamat_jemput"></textarea></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" class="tombol_login" value="Pesan"> </td> 
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $email = $_POST['email'];
        $jurusan= $_POST['jurusan'];
        $harga = $_POST['harga'];
        $tgl_berangkat = $_POST['tgl_berangkat'];
        $jumlah = $_POST['jumlah'];
        $alamat_jemput = $_POST['alamat_jemput'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_pemesanan(id_pesan,email,jurusan,tgl_berangkat,harga,jumlah,alamat_jemput) VALUES('$id_pesan','$email','$jurusan','$harga','$tgl_berangkat','$jumlah', '$alamat_jemput')");

        // Show message when user added
        echo "Selamat anda telah berhasil melakukan pemesanan, silahkan <a href='login.php'>pembayaran</a>";
    }
    ?>
</body>
</html>