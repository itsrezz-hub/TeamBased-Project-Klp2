<?php
include 'koneksi.php';

$id_karyawan_lama = $_POST['id_karyawan_lama'];
$id_karyawan    = $_POST['id_karyawan'];
$nama           = $_POST['nama'];
$jabatan        = $_POST['jabatan'];

mysqli_query($koneksi,"UPDATE karyawan SET id_karyawan='$id_karyawan', nama='$nama', jabatan='$jabatan' WHERE id_karyawan='$id_karyawan_lama'");

header("location:index.php");
?>