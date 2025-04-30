<?php
include 'koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama         = $_POST['nama'];
$alamat       = $_POST['alamat'];
$no_telepon   = $_POST['no_telepon'];

mysqli_query($koneksi,"INSERT INTO pelanggan (id_pelanggan, nama, alamat, no_telepon) VALUES('$id_pelanggan','$nama','$alamat','$no_telepon')");

header("location:index.php");
?>