<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h2>Form Tambah Siswa</h2>
    
    <form action="proses_tambah.php" 
          method="POST">
        
        <label>Nama Siswa:</label>
        <input type="text" 
               name="nama" 
               required>
        <br><br>
        
        <label>Kelas:</label>
        <input type="text" 
               name="kelas" 
               required>
        <br><br>
        
        <label>Alamat:</label>
        <textarea name="alamat" 
                  required></textarea>
        <br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>