<?php
include '../koneksi.php';

// Melindungi input dari karakter kutip/petik yang menyebabkan error SQL
$nama    = mysqli_real_escape_string($conn, $_POST['nama']);
$alamat  = mysqli_real_escape_string($conn, $_POST['alamat']);
$no_telp = mysqli_real_escape_string($conn, $_POST['no_telp']);

$sql = "INSERT INTO anggota (nama, alamat, no_telp) VALUES ('$nama', '$alamat', '$no_telp')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data Anggota berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Error saat menambahkan data: " . mysqli_error($conn) . "'); window.location='tambah.php';</script>";
}
?>
