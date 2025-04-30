<!DOCTYPE html>
<html>
<head>
    <title>Data Topping</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>
    <div class="container">
        <h1>Data Topping</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID Topping</th>
                    <th>Nama Topping</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php include __DIR__ . '/../includes/navbar.php'; ?>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi,"SELECT * FROM topping");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $d['Id_topping']; ?></td>
                        <td><?php echo $d['Nama_topping']; ?></td>
                        <td><?php echo $d['harga']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['Id_topping']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $d['Id_topping']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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
