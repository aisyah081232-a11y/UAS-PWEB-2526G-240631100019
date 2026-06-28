<?php
include 'function.php';

if(isset($_POST["submit"])){

    if(tambah($_POST) > 0){

        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href='daftar.php';
        </script>
        ";

    }else{

        echo "
        <script>
            alert('Data gagal ditambahkan!');
        </script>
        ";

    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar">
     Sistem Pendataan Buku
</div>

<div class="container">

<div class="card form-card">

<h2>Tambah Data Buku</h2>

<form action="" method="post">

<label>Kode Buku</label>
<input type="text" name="kode_buku" required>

<label>Judul Buku</label>
<input type="text" name="judul" required>

<label>Penulis</label>
<input type="text" name="penulis" required>

<label>Penerbit</label>
<input type="text" name="penerbit" required>

<label>Tahun Terbit</label>
<input type="number" name="tahun_terbit" required>

<label>Stok</label>
<input type="number" name="stok" required>

<br><br>

<button type="submit" name="submit" class="btn btn-success">
Simpan
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


</p>

</footer>

</body>
</html>