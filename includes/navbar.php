<?php
// includes/navbar.php
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/TEAM_PROJECT/";
?>

<nav class="navbar">
    <ul class="nav-list">
        <li><a href="<?= $base_url ?>anggota_kelompok/index.php">Anggota Kelompok</a></li>
        <li><a href="<?= $base_url ?>karyawan/index.php">Karyawan</a></li>
        <li><a href="<?= $base_url ?>produk/index.php">Produk</a></li>
        <li><a href="<?= $base_url ?>pelanggan/index_pelanggan.php">Pelanggan</a></li>
        <li><a href="<?= $base_url ?>topping/index.php">Topping</a></li>
        <li><a href="<?= $base_url ?>transaksi/index.php">Transaksi</a></li>
        <li><a href="<?= $base_url ?>transaksi_db/index.php">Transaksi Detail</a></li>
        <li><a href="<?= $base_url ?>ukuran/index.php">Ukuran</a></li>
    </ul>
</nav>