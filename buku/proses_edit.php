<?php
include '../koneksi.php';

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$stok = $_POST['stok'];

$sql = "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', stok='$stok' WHERE id_buku='$id_buku'";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>