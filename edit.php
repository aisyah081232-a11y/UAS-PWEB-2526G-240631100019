<?php
include 'function.php';

$id = $_GET["id"];

$buku = tampilData("SELECT * FROM buku WHERE id = $id")[0];

if(isset($_POST["submit"])){

    if(ubah($_POST) > 0){
        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href='daftar.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Data gagal diubah!');
            document.location.href='daftar.php';
        </script>
        ";
    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="navbar">
    📚 Sistem Pendataan Buku
</div>

<div class="container">

<div class="card">

<h2>Edit Data Buku</h2>

<form action="" method="post">

<input type="hidden" name="id" value="<?= $buku["id"]; ?>">

<label>Kode Buku</label>
<input type="text" name="kode_buku" value="<?= $buku["kode_buku"]; ?>" required>

<label>Judul Buku</label>
<input type="text" name="judul" value="<?= $buku["judul"]; ?>" required>

<label>Penulis</label>
<input type="text" name="penulis" value="<?= $buku["penulis"]; ?>" required>

<label>Penerbit</label>
<input type="text" name="penerbit" value="<?= $buku["penerbit"]; ?>" required>

<label>Tahun Terbit</label>
<input type="number" name="tahun_terbit" value="<?= $buku["tahun_terbit"]; ?>" required>

<label>Stok</label>
<input type="number" name="stok" value="<?= $buku["stok"]; ?>" required>

<br>

<button type="submit" name="submit" class="btn btn-warning">
Simpan Perubahan
</button>

<a href="daftar.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

<footer>

<hr>

<p>

Dibuat Oleh <b>Nur Aisyah</b><br>

NIM : <b>240631100019</b><br>

Pendidikan Informatika - UTM

</p>

</footer>

</body>
</html>