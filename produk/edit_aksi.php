<?php
include 'koneksi.php';

$id_produk_lama = $_POST['id_produk_lama'];
$id_produk  = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$kategori   = $_POST['kategori'];
$harga      = $_POST['harga'];
$stok       = $_POST['stok'];

mysqli_query($koneksi,"UPDATE produk SET id_produk='$id_produk', nama_produk='$nama_produk', kategori='$kategori', harga='$harga', stok='$stok' WHERE id_produk='$id_produk_lama'");

header("location:index.php");
?>