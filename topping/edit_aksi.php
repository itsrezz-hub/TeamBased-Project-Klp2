<?php
include 'koneksi.php';

$Id_topping_lama = $_POST['Id_topping_lama'];
$Id_topping  = $_POST['Id_topping'];
$Nama_topping = $_POST['Nama_topping'];
$harga      = $_POST['harga'];

mysqli_query($koneksi,"UPDATE topping SET Id_topping='$Id_topping', Nama_topping='$Nama_topping', harga='$harga' WHERE Id_topping='$Id_topping_lama'");

header("location:index.php");
?>