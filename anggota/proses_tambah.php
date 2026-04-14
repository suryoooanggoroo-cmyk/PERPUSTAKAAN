<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$sql = "INSERT INTO anggota (nama, alamat, no_telp) VALUES ('$nama', '$alamat', '$no_telp')";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
