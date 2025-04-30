<?php
include 'koneksi.php';

$id_pelanggan_lama = $_POST['id_pelanggan_lama'];
$id_pelanggan    = $_POST['id_pelanggan'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$no_telepon     = $_POST['no_telepon'];

mysqli_query($koneksi,"UPDATE pelanggan SET id_pelanggan='$id_pelanggan', nama='$nama', alamat='$alamat', no_telepon='$no_telepon' WHERE id_pelanggan='$id_pelanggan_lama'");

header("location:index.php");
?>