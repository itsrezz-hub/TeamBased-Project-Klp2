<?php
include 'koneksi.php';

$Id_topping  = $_POST['Id_topping'];
$Nama_topping = $_POST['Nama_topping'];
$harga      = $_POST['harga'];

mysqli_query($koneksi,"INSERT INTO topping (Id_topping, Nama_topping, harga) VALUES('$Id_topping','$Nama_topping','$harga')");

header("location:index.php");
?>