<?php
include 'config.php';
?>

<h2>Data Mahasiswa</h2>

<a href="tambah.php">+ Tambah Data</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
  <th>ID</th>
  <th>Nama</th>
  <th>NPM</th>
  <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_assoc($data)) {
?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['nama'] ?></td>
  <td><?= $row['NPM'] ?></td>
  <td>
    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
    <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
  </td>
</tr>
<?php } ?>
</table>