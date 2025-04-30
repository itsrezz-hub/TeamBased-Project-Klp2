<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
   <?php include '../includes/navbar.php'; ?>
    <div class="container">
        <h1>Data Produk</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi,"SELECT * FROM produk");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $d['id_produk']; ?></td>
                        <td><?php echo $d['nama_produk']; ?></td>
                        <td><?php echo $d['kategori']; ?></td>
                        <td><?php echo $d['harga']; ?></td>
                        <td><?php echo $d['stok']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['id_produk']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $d['id_produk']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer>Copyright 2025, Kelompok 2</footer>
</body>
</html>
