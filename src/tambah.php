<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  mysqli_query($koneksi,
    "INSERT INTO mahasiswa (nama, nim)
     VALUES ('$_POST[nama]', '$_POST[nim]')");
  echo "<script>window.location='index.php';</script>";
  exit;
}
?>
<form method="post">
Nama: <input name="nama" required><br>
NIM: <input name="nim" required><br>
<button>Simpan</button>
</form>
