<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$email = $_GET['email'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tb_user WHERE email=$email");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:formtambah.php");
?>