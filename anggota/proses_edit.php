<?php
include '../koneksi.php';

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$sql = "UPDATE anggota SET nama='$nama', alamat='$alamat', telp='$telp' WHERE id_anggota='$id_anggota'";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
