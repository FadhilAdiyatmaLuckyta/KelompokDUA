
<html>
<head>
    <title>Tambah Jurusan</title>
    <link rel="stylesheet" type="text/css" href="css_jurusan.css">
</head>

<body>
    
    <br/><br/>
    <div class ="kotakjurusan">
	<p class="tulisan_jurusan">Silahkan Daftar</p>
    <form action="filejurusan.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID Jurusan</td>
                <td><input type="text" class="form_jurusan" name="id_jurusan"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" class="form_jurusan" name="jurusan"></td>
            </tr>
            <tr> 
                <td>Jam</td>
                <td><input type="text" class="form_jurusan" name="jam"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" class="form_jurusan" name="harga"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" class="tombol_tambahkan" value="Tambahkan"> </td> 
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
        $result = mysqli_query($mysqli, "INSERT INTO tb_jurusan(id_jurusan,jurusan,jam,harga) VALUES('$id_jurusan','$jurusan','$jam','$harga')");

        // Show message when user added
        echo "Selamat anda telah mendaftar, silahkan <a href='formtambahjurusan.php'>lihat</a> kembali";
    }
    ?>
</body>
</html>