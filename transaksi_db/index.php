<?php 
include 'config.php';
// Start output buffer to prevent any accidental output
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
    <?php
    if (isset($_GET['success'])) {
        echo '<div style="background: #dff0d8; color: #3c763d; padding: 10px; margin-bottom: 20px;">
                Data berhasil disimpan!
              </div>';
    }
    ?>
    <title>Manajemen Transaksi</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <!-- NAVBAR AT THE VERY TOP - RIGHT AFTER BODY TAG -->
    <?php include __DIR__ . '/../includes/navbar.php'; ?>

    <h1>Detail Transaksi</h1>
    <a href="add.php" class="btn btn-primary">Tambah Data</a>
    <br><br>
    
    <div class="table-wrapper">
    <table>
        <tr>
            <th>ID Transaksi</th>
            <th>ID Produk</th>
            <th>Ukuran</th>
            <th>Topping</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM detail_transaksi";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["Id_transaksi"]."</td>
                    <td>".$row["Id_produk"]."</td>
                    <td>".$row["Id_ukuran"]."</td>
                    <td>".$row["Id_topping"]."</td>
                    <td>".$row["jumlah"]."</td>
                    <td>".$row["subtotal"]."</td>
                    <td>
                        <a href='edit.php?id=".$row["Id_transaksi"]."&prod=".$row["Id_produk"]."' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='delete.php?id=".$row["Id_transaksi"]."&prod=".$row["Id_produk"]."' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Tidak ada data transaksi</td></tr>";
        }
        ?>
    </table>
    </div>
    <footer>Copyright 2025, Kelompok 2</footer>
</body>
</html>

<?php
// End output buffering
ob_end_flush();
?>