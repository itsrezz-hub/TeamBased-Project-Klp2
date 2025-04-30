<?php
include 'koneksi.php';

$Id_ukuran_lama = $_POST['Id_ukuran_lama'];
$Id_ukuran  = $_POST['Id_ukuran'];
$Nama_ukuran = $_POST['Nama_ukuran'];

mysqli_query($koneksi,"UPDATE ukuran SET Id_ukuran='$Id_ukuran', Nama_ukuran='$Nama_ukuran' WHERE Id_ukuran='$Id_ukuran_lama'");

header("location:index.php");
?>