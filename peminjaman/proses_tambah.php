<?php
include '../koneksi.php';

$id_buku = $_POST['id_buku'];
$id_anggota = $_POST['id_anggota'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];

$sql = "INSERT INTO peminjaman (id_buku, id_anggota, tanggal_pinjam, tanggal_kembali) VALUES ('$id_buku', '$id_anggota', '$tanggal_pinjam', '$tanggal_kembali')";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
