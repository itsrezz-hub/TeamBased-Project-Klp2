<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota Kelompok</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>
    <div class="container">
        <h1>Data Anggota Kelompok</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php'; // Sesuaikan path ke koneksi.php
                $data = mysqli_query($koneksi,"SELECT * FROM anggota_kelompok");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['nim']; ?></td>
                        <td><?php echo $d['kelas']; ?></td>
                        <td>
                            <a href="edit.php?nim=<?php echo $d['nim']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?nim=<?php echo $d['nim']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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
