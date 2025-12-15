<?php include 'config.php'; ?>

<h2>Tambah Mahasiswa</h2>

<form method="post">
Nama: <input type="text" name="nama" required><br><br>
NPM: <input type="text" name="npm" required><br><br>
<button type="submit">Simpan</button>
</form>

<?php
if ($_POST) {
  mysqli_query($koneksi,
    "INSERT INTO mahasiswa (nama, npm)
     VALUES ('$_POST[nama]', '$_POST[npm]')");
  header("Location: index.php");
}
?>
