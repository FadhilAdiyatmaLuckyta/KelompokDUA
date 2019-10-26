
<html>
<head>
    <title>Add Users</title>
    <link rel="stylesheet" type="text/css" href="css_daftar.css">
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
    
    <br/><br/>
    <div class ="kotaklogin">
	<p class="tulisan_login">Silahkan Daftar</p>
    <form action="filetambah.php" method="post" name="form1" onSubmit="validasi()">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text"  class="form_login" id ="nama" name="nama_pengguna" required></td>
            </tr>
            <tr> 
                <td>Telp</td>
                <td><input type="text"  class="form_login" id="telp" name="telp" required></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text"  class="form_login" id="alamat" name="alamat" required></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text"  class="form_login" id="username" name="username" required></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password"  class="form_login" id="password" name="password" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="checkbox" name="level" id="setuju" class="ok" required
                <?php if (isset($level) && $level=="pengguna") echo "checked";?>
                value="pengguna">Saya Pengguna Baru</td>
            </tr>
            <tr> 
            
                <td></td>
				<td><input type="submit" name= "Submit"  id="button" class="tombol_login" value="Button" disabled></td>
            </tr>
        </table>
        
    </form>
            
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        
        $nama_pengguna = $_POST['nama_pengguna'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_pengguna(id_pengguna,nama_pengguna,telp,alamat,username,password,level) VALUES('id_pengguna','$nama_pengguna','$telp','$alamat','$username','$password','$level')");

        // Show message when user added
        echo "Selamat anda telah mendaftar, silahkan <a href='login.php'>login</a> kembali";

        
    }
    
    ?>
    
    
   
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var telp = document.getElementById("telp").value;
		var alamat = document.getElementById("alamat").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var setuju = document.getElementById("setuju").value;

		if (nama != "" && telp!="" && alamat !="" && username !="" && password !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>

    
</body>
</html>