<?php
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id_user DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="filetambah.php">Add New User</a><br/><br/>

    <table width='80%' border="1">

    <tr>
         <th>ID Pengguna</th>    <th>Nama</th> <th>tempat lahir</th> <th>Tanggal lahir</th>  <th>Jenis Kelamin</th>  <th>Tipe ID</th>  <th>Nomer ID</th>  <th>Telepon</th> <th>Alamat</th> <th>Username</th> <th>Password</th> <th>Level</th> <th>Update</th>
    </tr>
    <?php  
    
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_user']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['tempat_lahir']."</td>";
        echo "<td>".$user_data['tanggal_lahir']."</td>";
        echo "<td>".$user_data['jekel']."</td>";
        echo "<td>".$user_data['tipe_id']."</td>";
        echo "<td>".$user_data['nomer_id']."</td>";
        echo "<td>".$user_data['telepon']."</td>"; 
        echo "<td>".$user_data['alamat']."</td>"; 
        echo "<td>".$user_data['username']."</td>";    
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['level']."</td>"; 
        echo "<td><a href='editusers.php?iduser=$user_data[id_user]'>Edit</a> | <a href='hapus.php?iduser=$user_data[id_user]'>hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>