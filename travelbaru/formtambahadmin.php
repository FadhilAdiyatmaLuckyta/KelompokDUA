<?php
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_admin ORDER BY id_admin DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="filetambahadmin.php">Add New Admin</a><br/><br/>

    <table width='80%' border=1>

    <tr>
    <th>Nama</th> <th>telp</th> <th>alamat</th>  <th>username</th>  <th>password</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_admin']."</td>";
        echo "<td>".$user_data['telp']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";    
        echo "<td><a href='edit.php?username=$user_data[username]'>Edit</a> | <a href='hapus.php?id_admin=$user_data[username]'>hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>