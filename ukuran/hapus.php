<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM ukuran WHERE Id_ukuran='$id'");

header("location:index.php");
?>