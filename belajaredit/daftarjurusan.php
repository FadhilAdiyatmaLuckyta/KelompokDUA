<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP MYSQL - Belajarphp.net</title>
    </head>
    <body>
        <h2>Daftar Jurusan</h2>
        <table border="1">
            <tr><th>id_jurusan</th><th>id_driver</th><th>id_car</th><th>jurusan</th><th>jam</th> <th>harga</th><th>ACTION</th></tr>
            <?php
            include 'koneksi.php';
            $id_jurusan = mysqli_query($koneksi, "SELECT * from id_jurusan");
            $no = 1;
             "
            <td>" . $row['id_jurusan'] . "</td>
            <td>" . $row['id_driver'] . "</td>
            <td>" . $row['id_car'] . "</td>
            <td>" . $row['jurusan'] . "</td>
            <td>" . $row['jam'] . "</td>
            <td>" . $row['harga'] . "</td>
            <td><a href='form-edit.php?id_jurusan=$row[id_jurusan]'>Edit</a>
                <a href='delete.php?id_jurusan=$row[id_jurusan]'>Delete</a>
            </td>
              </tr>";
                $no++;
            
            ?>
        </table>

    </body>
</html>