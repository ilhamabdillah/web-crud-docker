<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  mysqli_query($koneksi,
    "INSERT INTO mahasiswa (nama, nim) VALUES ('$_POST[nama]', '$_POST[nim]')");
  echo "<script>window.location='index.php';</script>";
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<div class="container">
  <h2 class="mb-4">Tambah Mahasiswa</h2>
  <form method="post" class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nama</label>
      <input name="nama" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">NIM</label>
      <input name="nim" class="form-control" required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
  </form>
</div>

</body>
</html>
