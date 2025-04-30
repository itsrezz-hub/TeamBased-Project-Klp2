<!DOCTYPE html>
<html>
<head>
    <title>Data Ukuran</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<?php include '../includes/navbar.php'; ?>
<body>
    <div class="container">
        <h1>Data Ukuran</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID Ukuran</th>
                    <th>Nama Ukuran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi,"SELECT * FROM ukuran");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $d['Id_ukuran']; ?></td>
                        <td><?php echo $d['Nama_ukuran']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['Id_ukuran']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $d['Id_ukuran']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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
