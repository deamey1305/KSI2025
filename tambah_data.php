<?php
include 'koneksi.php';

$nama = "Buku";
$harga = 15000;

// Query insert data
$sql = "INSERT INTO produk (nama, harga) VALUES ('$nama', '$harga')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Gagal menambah data: " . $conn->error;
}

$conn->close();
?>
