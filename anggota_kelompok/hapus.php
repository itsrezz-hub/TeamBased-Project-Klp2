<?php
include 'koneksi.php'; // Sesuaikan path ke koneksi.php

$nim = $_GET['nim'];

mysqli_query($koneksi,"DELETE FROM anggota_kelompok WHERE nim='$nim'");

header("location:index.php");
?>