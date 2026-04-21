<?php
include '../cek_login.php';
include '../koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM anggota WHERE id_anggota='$id'";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
