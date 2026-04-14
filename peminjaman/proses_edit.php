<?php
include '../koneksi.php';

$id_peminjama = mysqli_real_escape_string($conn, $_POST['id_peminjama']);
$id_buku = mysqli_real_escape_string($conn, $_POST['id_buku']);
$id_anggota = mysqli_real_escape_string($conn, $_POST['id_anggota']);
$tgl_peminjaman = mysqli_real_escape_string($conn, $_POST['tgl_peminjaman']);
$tgl_kembali = mysqli_real_escape_string($conn, $_POST['tgl_kembali']);

$sql = "UPDATE peminjaman SET id_buku='$id_buku', id_anggota='$id_anggota', tgl_peminjaman='$tgl_peminjaman', tgl_kembali='$tgl_kembali' WHERE id_peminjama='$id_peminjama'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data Peminjaman berhasil diperbarui!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Error saat mengedit data: " . mysqli_error($conn) . "'); window.location='index.php';</script>";
}
?>
