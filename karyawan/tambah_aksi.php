<?php
include 'koneksi.php';

$id_karyawan = $_POST['id_karyawan'];
$nama        = $_POST['nama'];
$jabatan     = $_POST['jabatan'];

mysqli_query($koneksi,"INSERT INTO karyawan (id_karyawan, nama, jabatan) VALUES('$id_karyawan','$nama','$jabatan')");

header("location:index.php");
?>