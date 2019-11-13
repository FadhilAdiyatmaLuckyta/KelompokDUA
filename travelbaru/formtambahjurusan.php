<?php
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_jurusan ORDER BY id_jurusan DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
</head>

<body>
<a href="filejurusan.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID_Jurusan</th> <th>Jurusan</th> <th>Jam</th>  <th>Harga</th>  <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_jurusan']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";
        echo "<td>".$user_data['jam']."</td>";
        echo "<td>".$user_data['harga']."</td>";    
        echo "<td><a href='edit.php?email=$user_data[id_jurusan]'>Edit</a> | <a href='hapus.php?email=$user_data[id_jurusan]'>hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>