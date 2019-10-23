<?php
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_pengguna ORDER BY id_pengguna DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="filetambah.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
         <th>ID Pengguna</th>    <th>Nama</th> <th>telp</th> <th>alamat</th>  <th>username</th>  <th>password</th>  <th>level</th>  <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_pengguna']."</td>";
        echo "<td>".$user_data['nama_pengguna']."</td>";
        echo "<td>".$user_data['telp']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['level']."</td>";    
        echo "<td><a href='edit.php?email=$user_data[id_pengguna]'>Edit</a> | <a href='hapus.php?email=$user_data[id_pengguna]'>hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>