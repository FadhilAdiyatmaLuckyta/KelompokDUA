
<html>
<head>
    <title>Tambah Jurusan</title>
    <link rel="stylesheet" type="text/css" href="css_jurusan.css">
    <link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
</head>

<body>
    
    <br/><br/>
    <div class ="kotakjurusan">
	<p class="tulisan_jurusan">Silahkan Tambah Jurusan</p>
    <form action="filejurusan.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID Driver</td>
                <td><input type="text" class="form_jurusan" name="id_driver" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>ID Cars</td>
                <td><input type="text" class="form_jurusan" name="id_car" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" class="form_jurusan" name="jurusan" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>Jam</td>
                <td><input type="text" class="form_jurusan" name="jam" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" class="form_jurusan" name="harga" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" class="tombol_tambahkan" value="Tambahkan" required> </td> 
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        
        $id_jurusan = $_POST['id_jurusan'];
        $jurusan = $_POST['jurusan'];
        $jam = $_POST['jam'];
        $harga = $_POST['harga'];
        


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO jurusan(id_jurusan,id_driver,id_car,jurusan,jam,harga) VALUES('$id_jurusan','$id_driver','$id_car','$jurusan','$jam','$harga')");

        // Show message when user added
        echo "Selamat anda telah mendaftar, silahkan <a href='formtambahjurusan.php'>lihat</a> kembali";
    }
    ?>
</body>
</html>