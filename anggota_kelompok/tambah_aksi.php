<?php
include 'koneksi.php'; // Sesuaikan path ke koneksi.php

$nama  = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi,"INSERT INTO anggota_kelompok (nama, nim, kelas) VALUES('$nama','$nim','$kelas')");

header("location:index.php");
?>