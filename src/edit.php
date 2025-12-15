<?php
include 'config.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(
  mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id")
);

if ($_POST) {
  mysqli_query($koneksi,
    "UPDATE mahasiswa SET
     nama='$_POST[nama]',
     nim='$_POST[nim]'
     WHERE id=$id");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<div class="container">
  <h2 class="mb-4">Edit Mahasiswa</h2>
  <form method="post" class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nama</label>
      <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">NIM</label>
      <input type="text" name="nim" value="<?= $data['nim'] ?>" class="form-control" required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-success">Update</button>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
  </form>
</div>

</body>
</html>
