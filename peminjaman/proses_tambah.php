<?php
include '../koneksi.php';

$id_buku = mysqli_real_escape_string($conn, $_POST['id_buku']);
$id_anggota = mysqli_real_escape_string($conn, $_POST['id_anggota']);
$tgl_peminjaman = mysqli_real_escape_string($conn, $_POST['tgl_peminjaman']);
$tgl_kembali = mysqli_real_escape_string($conn, $_POST['tgl_kembali']);

$sql = "INSERT INTO peminjaman (id_buku, id_anggota, tgl_peminjaman, tgl_kembali) VALUES ('$id_buku', '$id_anggota', '$tgl_peminjaman', '$tgl_kembali')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data Peminjaman berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Error saat menambahkan data: " . mysqli_error($conn) . "'); window.location='tambah.php';</script>";
}
?>
