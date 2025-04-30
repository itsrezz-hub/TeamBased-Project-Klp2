<?php
include 'koneksi.php'; // Sesuaikan path ke koneksi.php

$nim_lama = $_POST['nim_lama'];
$nama  = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi,"UPDATE anggota_kelompok SET nama='$nama', nim='$nim', kelas='$kelas' WHERE nim='$nim_lama'");

header("location:index.php");
?>