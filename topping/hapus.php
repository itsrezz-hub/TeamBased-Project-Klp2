<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM topping WHERE Id_topping='$id'");

header("location:index.php");
?>