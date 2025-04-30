<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id_transaksi = $_POST['id_transaksi'];
    $id_produk = $_POST['id_produk'];
    $id_ukuran = $_POST['id_ukuran'];
    $id_topping = !empty($_POST['id_topping']) ? $_POST['id_topping'] : NULL;
    $jumlah = $_POST['jumlah'];
    $subtotal = $_POST['subtotal'];

    // Mulai transaction
    $conn->autocommit(FALSE);

    try {
        // 1. Insert Detail Transaksi
        $sql = "INSERT INTO detail_transaksi (Id_transaksi, Id_produk, Id_ukuran, Id_topping, jumlah, subtotal)
                VALUES ('$id_transaksi', '$id_produk', '$id_ukuran', '$id_topping', $jumlah, $subtotal)";
        
        if ($conn->query($sql) === FALSE) {
            throw new Exception("Gagal menyimpan detail transaksi: " . $conn->error);
        }

        // 2. Update Stok Produk
        $conn->query("UPDATE produk SET stok = stok - $jumlah WHERE Id_produk = '$id_produk'");

        // 3. Update Total Transaksi
        $sum_sql = "SELECT SUM(subtotal) as total FROM detail_transaksi WHERE Id_transaksi = '$id_transaksi'";
        $result = $conn->query($sum_sql);
        $total = $result->fetch_assoc()['total'] ?? 0;
        
        $conn->query("UPDATE transaksi SET total_harga = $total WHERE id_transaksi = '$id_transaksi'");

        // Commit jika semua sukses
        $conn->commit();
        header("Location: index.php?success=1");
        exit;
    } catch (Exception $e) {
        $conn->rollback();
        die("Error: " . $e->getMessage());
    }
}

$conn->close();
?>