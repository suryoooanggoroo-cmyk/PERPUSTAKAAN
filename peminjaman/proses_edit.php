<?php
include '../koneksi.php';

$id_peminjaman = $_POST['id_peminjaman'];
$id_buku = $_POST['id_buku'];
$id_anggota = $_POST['id_anggota'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];

$sql = "UPDATE peminjaman SET id_buku='$id_buku', id_anggota='$id_anggota', tanggal_pinjam='$tanggal_pinjam', tanggal_kembali='$tanggal_kembali' WHERE id_peminjaman='$id_peminjaman'";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
