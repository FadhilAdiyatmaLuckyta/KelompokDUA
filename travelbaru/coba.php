<?php
mysql_connect("localhost","root","");
mysql_connect_db("lansa_trans");
$result = mysql_query("select * from coba");
$jsArray = "var namasaya = new Array();\n";
?>
<table>
<tr>
    <td>Kode saya <td>:<td>
    <select name ="kd" onchange="changeValue(this.value)">
        <option selected="selected">----------</option>

<?php

        while($row = mysql_fetch_array($result)) {
        echo '<option value="' . $row['kd'] . '">' . $row['kd'] . '<option>';
        $jsArray .= "namasaya['" . $row['kd'] . "'] = {satu:'" . addslashes($row['nama']) . "'};\n";

 }
 ?>
</select>
    </td>

</tr>
<tr>
<td>
Nama<td> : <td> <input type ="text" name="nama" id="nama" value=""/>
</tr>
</table>
<script type="text/javascript">
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementbyId('nama') .value = namasaya[id].satu;

};
</script>


