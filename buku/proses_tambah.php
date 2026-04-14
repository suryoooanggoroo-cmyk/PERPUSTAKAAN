<?php
include '../koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$stok = $_POST['stok'];

$sql = "INSERT INTO buku (judul, penulis, penerbit, stok) VALUES ('$judul', '$penulis', '$penerbit', '$stok')";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>