<?php
include 'function.php';

if(isset($_POST["cari"])){

    $keyword = $_POST["keyword"];

    $buku = tampilData("SELECT * FROM buku
    WHERE
    kode_buku LIKE '%$keyword%' OR
    judul LIKE '%$keyword%' OR
    penulis LIKE '%$keyword%' OR
    penerbit LIKE '%$keyword%'
    ORDER BY id ASC");

}else{

    $buku = tampilData("SELECT * FROM buku ORDER BY id ASC");

}
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Daftar Buku</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="navbar">
 Sistem Pendataan Buku
</div>

<div class="container">

<div class="card">

<h2>Daftar Data Buku</h2>

<div class="atas">

<form action="" method="post" class="search-form">

<input
type="text"
name="keyword"
placeholder="Cari kode, judul atau penulis...">

<button
type="submit"
name="cari"
class="btn btn-primary">

Cari

</button>

<a href="daftar.php" class="btn btn-secondary">
Reset
</a>

</form>

<a href="tambah.php" class="btn btn-success">
+ Tambah Buku
</a>

</div>

</div>

<div class="card">

<table>

<tr>

<th>No</th>
<th>Kode</th>
<th>Judul</th>
<th>Penulis</th>
<th>Penerbit</th>
<th>Tahun</th>
<th>Stok</th>
<th>Aksi</th>

</tr>

<?php
$no=1;
foreach($buku as $row):
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $row['kode_buku']; ?></td>

<td><?= $row['judul']; ?></td>

<td><?= $row['penulis']; ?></td>

<td><?= $row['penerbit']; ?></td>

<td><?= $row['tahun_terbit']; ?></td>

<td><?= $row['stok']; ?></td>

<td>

<a
href="edit.php?id=<?= $row['id']; ?>"
class="btn btn-warning">

Edit

</a>

<a
href="hapus.php?id=<?= $row['id']; ?>"
class="btn btn-danger"
onclick="return confirm('Yakin ingin menghapus?')">

Hapus

</a>

</td>

</tr>

<?php endforeach; ?>

</table>

</div>

<a href="index.php" class="btn btn-secondary">

← Dashboard

</a>

</div>

<footer>

<hr>

<p>

</p>

</footer>

</body>

</html>