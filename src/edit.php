<?php
include 'config.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(
  mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id")
);
?>

<h2>Edit Mahasiswa</h2>

<form method="post">
Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br><br>
NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>" required><br><br>
<button type="submit">Update</button>
</form>

<?php
if ($_POST) {
  mysqli_query($koneksi,
    "UPDATE mahasiswa SET
     nama='$_POST[nama]',
     nim='$_POST[nim]'
     WHERE id=$id");
  header("Location: index.php");
}
?>
