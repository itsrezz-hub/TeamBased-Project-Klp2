<?php
include 'koneksi.php';

$id_produk  = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$kategori   = $_POST['kategori'];
$harga      = $_POST['harga'];
$stok       = $_POST['stok'];

mysqli_query($koneksi,"INSERT INTO produk (id_produk, nama_produk, kategori, harga, stok) VALUES('$id_produk','$nama_produk','$kategori','$harga','$stok')");

header("location:index.php");
?>