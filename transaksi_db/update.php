<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $original_id_transaksi = $_POST['original_id_transaksi'];
    $original_id_produk = $_POST['original_id_produk'];
    
    $id_transaksi = $_POST['id_transaksi'];
    $id_produk = $_POST['id_produk'];
    $id_ukuran = $_POST['id_ukuran'];
    $id_topping = $_POST['id_topping'] ?? NULL;
    $jumlah = $_POST['jumlah'];
    $subtotal = $_POST['subtotal'];

    $sql = "UPDATE detail_transaksi SET 
            Id_transaksi='$id_transaksi', 
            Id_produk='$id_produk', 
            Id_ukuran='$id_ukuran', 
            Id_topping='$id_topping', 
            jumlah=$jumlah, 
            subtotal=$subtotal
            WHERE Id_transaksi='$original_id_transaksi' AND Id_produk='$original_id_produk'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>