<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>
    <div class="container">
        <h1>Data Karyawan</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID Karyawan</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi,"SELECT * FROM karyawan");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $d['id_karyawan']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['jabatan']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['id_karyawan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $d['id_karyawan']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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
