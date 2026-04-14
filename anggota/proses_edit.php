<?php
include '../koneksi.php';

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$sql = "UPDATE anggota SET nama='$nama', alamat='$alamat', no_telp='$no_telp' WHERE id_anggota='$id_anggota'";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
