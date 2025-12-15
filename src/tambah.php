<?php include 'config.php'; ?>

<h2>Tambah Mahasiswa</h2>

<form method="post">
Nama: <input type="text" name="nama" required><br><br>
NIM: <input type="text" name="nim" required><br><br>
<button type="submit">Simpan</button>
</form>

<?php
if ($_POST) {
  mysqli_query($koneksi,
    "INSERT INTO mahasiswa (nama, nim)
     VALUES ('$_POST[nama]', '$_POST[nim]')");
  header("Location: index.php");
}
?>
