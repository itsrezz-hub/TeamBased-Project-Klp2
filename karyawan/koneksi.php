<?php
$host       = "localhost"; // Atau IP address server database Anda
$username   = "root";      // Username database Anda
$password   = "";          // Password database Anda
$database   = "test";      // Nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>