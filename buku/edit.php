<?php
// STEP 1: Tangkap ID dari URL
include 'koneksi.php';
$id = $_GET['id'];

// STEP 2: Ambil data siswa berdasarkan ID
$query = mysqli_query($conn, 
    "SELECT * FROM siswa WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<!-- STEP 3: Tampilkan form dengan data lama -->
<form action="proses_edit.php" 
      method="POST">
    
    <!-- Kirim ID lewat hidden input -->
    <input type="hidden" 
           name="id" 
           value="<?= $data['id'] ?>">
    
    <label>Nama:</label>
    <input type="text" 
           name="nama" 
           value="<?= $data['nama'] ?>">
    <br><br>
    
    <label>Kelas:</label>
    <input type="text" 
           name="kelas" 
           value="<?= $data['kelas'] ?>">
    <br><br>
    
    <label>Alamat:</label>
    <textarea name="alamat"><?= $data['alamat'] ?></textarea>
    <br><br>
    
    <button type="submit">Update</button>
</form>