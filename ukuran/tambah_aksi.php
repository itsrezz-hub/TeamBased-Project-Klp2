<?php
include 'koneksi.php';

$Id_ukuran  = $_POST['Id_ukuran'];
$Nama_ukuran = $_POST['Nama_ukuran'];

mysqli_query($koneksi,"INSERT INTO ukuran (Id_ukuran, Nama_ukuran) VALUES('$Id_ukuran','$Nama_ukuran')");

header("location:index.php");
?>